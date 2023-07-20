<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	
  	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/slider.css" />
	<link rel="stylesheet" href="styles/form.css">
	<link rel="stylesheet" href="styles/Cart.css">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="scripts/kosz.js"></script>
	<title>Sklep KIWI</title>

    <meta name="description" content="W naszym sklepie kupisz najróżnejsze rzeczy związane z komputerami.Jeśli masz jakiś pytania pisz śmiało do nas."/>
    <meta name="keywords" content="sklep,komputery,sprzęt do komputerów,kiwi,owoc,zwierzę"/>
    <meta name="author" content="Dżejkop,Słąwek,Nejten,Wojtula"/>
</head>
<body>
<header> 
		<div class="nazwa">
			<a href="main.php"><img src="images/1.png" alt="zdjecie loga"></a>
		</div>

		<div class="menu">
			<ol class="menu-lista"></a>
				<li><a href="podzespoly.php">Podzespoły komputerowe</a></li>
				<li><a href="o_nas.php">O nas</a></li>
				<li><a href="kontakt.php" class="contact-btn" id="contact-btn">kontakt</a></li>
			</ol>
		</div>

		<div class="container" id="container">
			<p>
				<?php
					if(isset($_SESSION['username']))
					{
						echo $_SESSION['username'];
						echo '<a href="PHP/logout.php"><button class="btn btn-slide-left">Wyloguj</button></a>';
					}
					else
					{
						echo '<a href="formularz_logowanie.php"><button class="btn btn-slide-left" >Logowanie</button></a>';
						echo '<a href="formularz_rejestracja.php"><button class="btn btn-slide-top">Rejestracja</button></a>';
					}
				?>
			</p>
		</div>
		<div class="kupno">
			  <div class="shopping">
				<img src="images/koszyk11.png" alt="koszyk" onclick="toggleShopping()">
				<span class="quantity">0</span>
			  </div>
			
			<div class="list"></div>
			<div class="card">
			  <h1>Koszyk</h1>
			  <ul class="listcard"></ul>
			  <div class="checkOut">
				<div class="total">0</div>
				<div class="closeShopping" onclick="toggleShopping()">Zamknij</div>
			  </div>
			</div>
		  </div>
	</header>

	<article id="log-form" class="log-form">
		<form action="PHP/login.php" method="POST" name="formularz_logowanie" id="formularz_logowanie">
			<label for="login">Login:</label><br />
			<input type="text" name="login" id="login" /><br />

			<label for="haslo">Hasło:</label><br />
			<input type="password" name="haslo" id="haslo" /><br />

			<input id="submit-form-button" type="submit" value="Zaloguj" />
		</form>

  <?php
	if(isset($_SESSION['blad']))
	echo $_SESSION['blad'];
  ?>
	</article>

	<footer>
		<a href="https://www.instagram.com/"><img src="images/instagram.png"> Kliknij i zaobserwuj</i></a><p>Sklep internetowy &copy; 2023</p>
	</footer>
</body>
</html>