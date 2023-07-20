<?php
    session_start();

    require_once "connect.php";

    $connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$connect)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

        $sql = "SELECT * FROM users WHERE username='$login' AND userpassword='$haslo'";

        if($results = $connect -> query($sql))
        {
            $ile_user = $results -> num_rows;

            if($ile_user > 0)
            {
                $_SESSION['zalogowany'] = true;

                $row = $results -> fetch_assoc();
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['username'] = $row['username'];

                unset($_SESSION['blad']);
                $results -> close();
                header('Location: ../main.php');
            }
            else
            {
                $_SESSION['blad'] = '<span style="color: red">nieprawidlowy login lub haslo</span>';
                header('Location: ../formularz_logowanie.php');
                $connect -> close();
            }
        }

        $connect -> close();
    }
?>