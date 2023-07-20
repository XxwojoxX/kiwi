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
	
  	<link rel="stylesheet" href="styles/podzespoly.css">
	<link rel="stylesheet" href="styles/Cart.css">
	<link rel="stylesheet" href="styles/show_components.css">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/slider.js" defer></script>
	<script src="scripts/timer.js"></script>
	<script src="scripts/registration.js"></script>
	<script src="scripts/login.js"></script>
	<script src="scripts/generator.js"></script>
	<script src="scripts/close_button.js" defer></script>
	<script src="scripts/contact.js"></script>
	<script src="scripts/popupToggle.js"></script>
	<script src="scripts/kosz.js"></script>
	
  <title>Sklep KIWI</title>
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
	
	<div id="imageContainer" class="imageContainer">
        <?php
			include "PHP/get_images.php";
			$componentsCount = count($components);
			for($i = 0; $i < $componentsCount; $i++)
			{
				echo "<p class='image'>" . $components[$i]['image'] . "</p>";
				echo $components[$i]['name'];
			}
		?>
    </div>

</body>
</html>