<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $wszysko_ok=true;
    $email = $_POST['email'];
    $typ = $_POST['typ'];
    $ocena_sklepu = isset($_POST['ocena_sklepu']) ? $_POST['ocena_sklepu'] : "";
    $polecenie = $_POST['polecenie'];
    $sugestie = $_POST['sugestie'];

    {

        $db_host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "kiwi_sklep";

        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Połączenie nieudane: " . $conn->connect_error);
        }
        
        
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
        {
            $wszysko_ok=false;
            $_SESSION['e_email']="Podaj poprawny adres e-mail!";
            
        }

        if($wszysko_ok==true)
        {
            $sql = "INSERT INTO ankieta (email, typ, ocena_sklepu, polecenie, sugestie)
            VALUES ('$email', '$typ', '$ocena_sklepu', '$polecenie', '$sugestie')"; 
            if ($conn->query($sql) === TRUE) {

                $message = "Twój formularz został wysłany pomyślnie!";
                header("Location: o_nas.php?message=" . urlencode($message));
                exit();
            } else {
                echo "Błąd podczas zapisywania ankiety: " . $conn->error;
            }
        }
        else
        {
            header('Location: ../o_nas.php');   
        }
        $conn->close();
    }
}
?>
