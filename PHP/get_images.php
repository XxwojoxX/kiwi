<?php
    // Tutaj umieść kod łączenia się z bazą danych i pobierania obrazków
    require_once 'connect.php';

    $componentType = $_GET['componentType'];
    $connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Wykonanie zapytania do bazy danych
    $sql = "SELECT componentImage, componentname FROM components WHERE componentType = '$componentType'";
    $result = mysqli_query($connect, $sql);

    $imageHTML = '';
    $nameHTML = '';

    $components = array();

    if ($result && mysqli_num_rows($result) > 0) {
        // Przetwarzanie wyników i wyświetlanie obrazków
        while ($row = mysqli_fetch_assoc($result)) {
            $image_path = $row['componentImage'];
            $name = $row['componentname'];

            $image = file_get_contents($image_path);
            $image_base64 = base64_encode($image);

            $component = array(
                'image' => '<img src="data:image/png;base64,' . $image_base64 . '" alt="' . $name . '">',
                'name' => '<p class="imageName">'. $name .'</p>'
            );
            $components[] = $component;
        }
    } else {
        echo "No images found";
    }

    // Zamykanie połączenia z bazą danych
    mysqli_close($connect);
?>