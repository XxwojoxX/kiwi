<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="styles/style.css">
	<script src="scripts/script.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/slider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="scripts/slider.js" defer></script>
	<script src="scripts/timer.js"></script>
	    <script src="scripts/script_onas.js" defer></script>
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
          


	<section>

		<div id="sale-panel">
			<div class="product-info">
			  <img src="images/procek.png" alt="Product Image">
			  <h3 class="product-name">Procesor ryzen 5 3600x </h3>
			  <p class="product-price">&nbsp;&nbsp;&nbsp;Cena: 99,99 zł</p>
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
				<div class="product">
                    <img src="images/karta2.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Karta graficzna Msi GeForce Gtx 1060 Oc 6GB GDDR5</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Układ:Radeon™ RX 470</li>
					<li>Pamięć:8 GB</li>
					<li>Rodzaj pamięci:GDDR5</li>
					<li>Złącza:HDMI - 2 szt., DVI - 1 szt., DisplayPort - 2 szt.</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
                <div class="product">
                    <img src="images/karta1.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Karta graficzna MSI Radeon RX 470 ARMOR 4G OC</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Długość karty: 246 mm</li>
					<li>Ilość pamięci RAM: 4 GB</li>
					<li>Rodzaj chipsetu: Radeon RX 470</li>
					<li>Łączenie kart: Nie</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
                <div class="product">
                    <img src="images/dysk1.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Dysk LEXAR NM620 512GB SSD</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Rodzaj dysku: SSD</li>
					<li>Typ dysku: Wewnętrzny</li>
					<li>Pojemność dysku: 512 GB</li>
					<li>Maksymalna prędkość: Odczytu 3300 MB/s, Zapisu 2400 MB/s, Interfejsu 8 GB/s</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/case2.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Obudowa NZXT H7 Elite Czarny</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Typ obudowy: Middle Tower</li>
					<li>Standard płyty głównej: ATX, EATX, microATX, Mini-ITX</li>
					<li>Podświetlenie: Podświetlane wentylatory</li>
					<li>Przyciski i regulatory: Power, Reset</li>
					<li>Wymiary (GxSxW) [mm]: 480 x 230 x 505</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/ram1.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Pamięć RAM KINGSTON Fury Beast 4GB 2666MHz</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Pojemność pamięci [GB]: 4</li>
					<li>Typ pamięci: DDR 4</li>
					<li>Taktowanie pamięci [MHz]: 2666</li>
					<li>Liczba kości pamięci: 1</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/procek.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Procesor AMD Ryzen 7 5700G, 3.8 GHz, 16 MB, BOX</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Częstotliwość taktowania procesora:3.8 GHz</li>
					<li>Typ gniazda:Socket AM4</li>
					<li>Liczba rdzeni:8</li>
					<li>Załączone chłodzenie:Tak</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/cooler1.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Chłodzenie Endorfy Fera 5</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Liczba wentylatorów:1</li>
					<li>Średnica wentylatora:120 mm</li>
					<li>Typ podłączenia:4 pin</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/case1.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Obudowa Endorfy Regnum 400 Air</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Kompatybilność:ATX, Micro ATX (uATX), Mini ITX</li>
					<li>USB Typ-C:Brak</li>
					<li>Maksymalna długość karty graficznej [cm]:37</li>
					<li>Zasilacz:Nie</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/plyta2.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Płyta główna MSI PRO B660M-G DDR4</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Chipset płyty: Intel B660</li>
					<li>Gniazdo procesora: Socket 1700</li>
					<li>Liczba slotów pamięci: 2</li>
					<li>Standard płyty: Micro ATX</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/ram2.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Pamięć Corsair Vengeance RGB PRO, DDR4, 16 GB, 3600MHz</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Częstotliwość pracy [MHz]:3600</li>
					<li>Pojemność łączna:16 GB</li>
					<li>Konfiguracja:Zestaw</li>
					<li>Typ pamięci:DDR4</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/psu2.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>be quiet! Pure Power 11 700W</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>UMoc: 700 W</li>
					<li>Certyfikat sprawności: 80 Plus Gold</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				
				<div class="product">
                    <img src="images/proc2.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Procesor AMD Ryzen 7 5700G</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Typ procesora: AMD Ryzen 7</li>
					<li>Model procesora: 5700G</li>
					<li>Liczba rdzeni: 8</li>
					<li>Częstotliwość taktowania procesora [GHz]: 3.8</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				<div class="product">
                    <img src="images/plyta2.png" alt="Karta Graficzna AMD Radeon Rx 580">
                    <h2>Płyta główna MSI PRO B660M-G DDR4</h2>
					<h3>Specyfikacje :</h3>
					<ul class ="fuszerka">
					<li>Chipset płyty: Intel B660</li>
					<li>Gniazdo procesora: Socket 1700</li>
					<li>Liczba slotów pamięci: 2</li>
					<li>Standard płyty: Micro ATX</li>
					</ul>
                    <p></p>
                    <button>Kup teraz</button>
            
                </div>
				  </section>
		</section>
<footer>Sklep internetowy &copy; 2023</footer>
</body>
</html>