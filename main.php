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
	<link rel="stylesheet" href="styles/Cart.css">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/slider.js" defer></script>
	<script src="scripts/timer.js"></script>
	<script src="scripts/popupToggle.js"></script>
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

	<div id="background">
		<div id="formularz"></div>
	</div>

	<div id="sale-panel">
		<div class="product-info">
		  <img src="images/cooler2.png" alt="Product Image" id="cooler2">
		  <p>Chłodzenie Noctua NH-D15</p>
		  <p class="product-price">&nbsp;&nbsp;&nbsp;Cena: 399,99 zł</p>
		</div>

		<div class="sale-info">
			<p class="sale-text">Przecena!</p>
			<div class="timer">
				<p class="timer-text">Do końca promocji pozostało:</p>
				<div id="countdown"></div>
			</div>
		</div>
	</div>
	
	<section>		
		<h1><b>NAJNOWSZE PROMOCJE!</b></h1>
		<section class="wrapper">
			<i class="fa-solid fa-arrow-left button" id="prev"></i>
			<div class="image-container">
				<div class="carousel">
					<img src="images/karta2.png" alt=""/>
					<img src="images/karta1.png" alt=""/>
					<img src="images/dysk1.png" alt=""/>
					<img src="images/case2.png" alt=""/>
					<img src="images/ram1.png" alt=""/>
					<img src="images/procek.png" alt=""/>
					<img src="images/cooler1.png" alt=""/>
					<img src="images/case1.png" alt="">
					<img src="images/plyta2.png" alt="">
					<img src="images/ram2.png" alt="">
					<img src="images/psu2.png" alt="">
					<img src="images/proc2.png" alt="">
					<img src="images/plyta2.png" alt="">
				</div>
				<i class="fa-solid fa-arrow-right button" id="next"></i>
			</div>
		</section>
		<a href="okazje.php"><button class="my-button">Sprawdź te super okazje!</button></a>
		<br>
		<a class="btn_Sub" onclick="popupToggle()">Zapisz się!</a>
		<div id="popup">
			<div class="content">
				<img src="images/email.png">
				<h2>Zapisz się do Newslettera</h2>
				<p>
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
					Aliquam repellat eligendi amet saepe, corporis eius beatae, odio excepturi temporibus, 
					dolore nemo rerum dolores sequi iste repellendus perspiciatis facilis. Et, id.
				</p>
				<div class="inputBox" >
					<input type="email" placeholder="Wpisz Email">
				</div>

				<div class="inputBox">
					<input type="Submit"  onclick="popupToggle()" value="Zapisz" class="btn_Sub">
				</div>
						
			</div>
			<a class="close" onclick="popupToggle()"><img src="images/cancel.png"></a>
		</div>

		<div id="akiwi">
			<img src="images/popKiwi.png">
			<a class="close" onclick="popupToggle1()" ><img src="images/cancel.png"></a>
		</div>
	</section>
	
	<footer>
		<a href="https://www.instagram.com/"><img src="images/instagram.png"> Kliknij i zaobserwuj</i></a><p>Sklep internetowy &copy; 2023</p>
	</footer>
</body>
</html>