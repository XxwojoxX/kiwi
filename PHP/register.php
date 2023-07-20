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
        $wszysko_ok=true;
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
	    $haslo2 = $_POST['haslo1'];

    if((strlen($haslo2)<8)||(strlen($haslo2)>20))
	{
		$wszysko_ok=false;
		$_SESSION['e_haslo']="Hasło od 8 do 20 znaków!";
	}
	if($haslo!=$haslo2)
		{
		$wszysko_ok=false;
		$_SESSION['e_haslo']="Nie są identyczne";
	}
  
	
	    $email = $_POST['email'];
            $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
            
            if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
            {
                $wszysko_ok=false;
                $_SESSION['e_email']="Podaj poprawny adres e-mail!";
                
            }
        $rezultat = $connect->query("SELECT userid FROM users WHERE email='$email'");

        if (!$rezultat) throw new Exception($connect->error);

        $ile_takich_maili = $rezultat->num_rows;
		if($ile_takich_maili>0)
		{
		    $wszysko_ok=false;
			$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
		}
        
        $rezultat = $connect->query("SELECT userid FROM users WHERE username='$login'");
				
		if (!$rezultat) throw new Exception($connect->error);
				
		$ile_takich_nickow = $rezultat->num_rows;
		if($ile_takich_nickow>0)
		{
			$wszysko_ok=false;
			$_SESSION['e_login']="Istnieje już uzytkownik o takim loginie! Wybierz inny.";
		}













        if( $wszysko_ok==true){
            $connect->query("INSERT INTO `users` VALUES (NULL,'$login','$haslo','$email')");
            header('Location: ../formularz_logowanie.php');
        }
        else{
            header('Location: ../formularz_rejestracja.php');   
        }
       
        
        $connect -> close();
    }
?>