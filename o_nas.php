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
  	<link rel="stylesheet" href="styles/o_nas.css">
	  <link rel="stylesheet" href="styles/Cart.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="scripts/script_onas.js" defer></script>
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
          

<section class = "regulamin">

				<h1><b>REGULAMIN</b></h1>

                <div class="read-more-container">

                    <div class="container">
                        <p>
                           <br> Regulamin Sklepu KIWI.PL obowiązujący od dnia 01.01.2021 r.</br>

<br>Niniejszy Regulamin Sklepu określa zasady składania zamówień oraz sprzedaży towarów
za pośrednictwem Sklepu Internetowego KIWI.PL. Zarejestrowanie się w sklepie i złożenie zamówienia jest równoznaczne z akceptacją sklepowego regulaminu.</br>
</p>
<p><br>
                            <span class="read-more-text">
                                <br>Sklep internetowy KIWI.PL (określany dalej jako "Sklep KIWI") jest własnością firmy Netland Computers Sp. z o.o. z siedzibą przy ul. Wrocławskiej 35, 62-800 Kalisz, NIP 6182144184, REGON 302447150, zarejestrowanej w Krajowym Rejestrze Sądowym pod numerem 0000465606,zwanej dalej KIWI.</br>
                                <br>Osoba składająca zamówienie, zwana dalej Zamawiającym, musi być pełnoletnią osobą fizyczną posiadająca zdolność do czynności prawnych lub przedsiębiorcą. .</br>
                                <br>Za konsumenta uważa się osobę fizyczną dokonującą z przedsiębiorcą czynności prawnej niezwiązanej bezpośrednio z jej działalnością gospodarczą lub zawodową. .</br>
                                <br>Ceny wszystkich towarów oferowanych w sklepie są cenami brutto (zawierają podatek 23% VAT) i są podane w złotych polskich. .</br>
                                <br>Podstawowym warunkiem realizacji dokonanych zakupów jest prawidłowe wypełnienie oraz przesłanie przez Klienta formularza zamówienia udostępnionego podczas procedury zamawiania towarów. .</br>
                                
                                <br>Informacje o towarach zamieszczone na stronach Sklepu KIWI nie stanowią oferty handlowej w rozumieniu art. 66-70 Kodeksu Cywilnego. .</br>
                                
                                <br>Wypełnienie i przesłanie przez Klienta formularza zamówienia stanowi złożenie firmie Netland Computers oferty zakupu w rozumieniu Kodeksu Cywilnego. .</br>
                                <br>Cena oferowana przy towarze jest wiążąca z chwilą złożenia zamówienia. .</br>
                                <br>Klient składając zamówienie wyraża zgodę na otrzymywanie korespondencji e-mail od firmy Netland Computers oraz na dodanie swojego adresu e-mail do naszej bazy w celu otrzymywania oferty handlowej. .</br>
                                
                                <br>Zamówiony towar będzie wysyłany przez firmę KIWI.</br>
                                
                                <br>Klient posiada prawo wyboru sposobu dostawy oraz metody płatności, zgodnie z formularzem zamówienia. .</br>
                                
                                <br>Koszty przesyłki są pokrywane przez Klienta. W określonych przypadkach, za porozumieniem
                                z KIWI, opłata za dostawę zamówionych towarów może być dokonana przez KIWI.</br>
                                
                                <br>Koszty przesyłki uzależnione są od wyboru sposobu płatności, sposobu dostawy oraz wagi przesyłki. Szczegółowy cennik dostawy znajduje się na stronie sklepu w zakładce „Wysyłka”. .</br>
                                
                                <br>W przypadku złożenia zamówienia większego niż 5000 zł brutto i wyboru formy płatności za pobraniem, należy dokonać przedpłaty na poniższy numer konta bankowego w wysokości 25% wartości zamówionego towaru. .</br>
                                <br>Przelewy należy przekazywać do banku Bank Santander na konto należące do Sprzedającego o numerze: 52 1910 1048 2794 9491 5401 0001.</br>
                                <br>Wraz z zamówionym towarem Klient otrzymuje również dowód zakupu (paragon lub faktura) oraz kartę gwarancyjną (jeśli występuje). .</br>
                                <br>Przy wysyłce paczki za pobraniem kurier może maksymalnie pobrać kwotę 5000 zł pobrania.
                                <br>Sprzedawca zastrzega sobie prawo odmowy realizacji zamówień wzbudzających wątpliwości
                                lub uzależnić w takich przypadkach realizację zamówienia od dokonania przedpłaty. .</br>
                                
                                <br>Sklep realizuje zamówienia niezwłocznie, nie później niż w ciągu 30 dni od dnia zawarcia umowy
                                (w praktyce jest to zazwyczaj 1-3 dni roboczych). W przypadku braku towaru w magazynie Klient zostanie powiadomiony o tym fakcie w ciągu 5 dni.</br>
                                
                                <br>Netland Computers dołoży wszelkich starań, aby oferta cenowa prezentowana na stronach Sklepu NETLAND była aktualna, a oferowane towary były dostępne w ciągłej sprzedaży. W przypadku czasowej niedostępności zamówionego towaru, Netland Computers niezwłocznie poinformuje o tym Klienta, który może w takiej sytuacji wycofać złożone zamówienie. .</br>
                                <br>Zakupione towary będą dostarczane pod adres wskazany w formularzu zamówienia.
                                <br>Przy dostawie towaru Zamawiający ma obowiązek sprawdzić:
                                czy przesyłka nie posiada uszkodzeń wynikłych z transportu ,
                                czy jest nienaruszona
                                czy jest zgodna z zamówieniem.</br>
                                <br>Stwierdzenie w obecności kuriera uszkodzenia przesyłki, niekompletności lub niezgodności przesyłki z zamówieniem oraz sporządzenie protokołu reklamacyjnego jest  podstawową przesłanką do rozpatrzenia ewentualnej reklamacji. W takiej sytuacji Sprzedawca natychmiast po otrzymaniu przesyłki i przyjęciu reklamacji wymieni produkt na pełnowartościowy. Jeśli będzie to już niemożliwe (na przykład z powodu wyczerpania stanów magazynowych), zaoferujemy do wyboru inne, dostępne w naszym sklepie produkty lub zwrócimy pieniądze. .</br>
                                
                                <br>Po dokonaniu wysyłki zakupionego towaru, Sklep w ramach realizacji umowy z Kupującym jest zobowiązany przesłać Kupującemu na adres poczty elektronicznej zaproszenie do wypełnienia ankiety w celu zbadania jego opinii o przeprowadzonej transakcji. Kupujący jest uprawniony, jednak nie zobowiązany do jej wypełnienia. .</br>
                                
                                <br>Przedsiębiorca prowadzący jednoosobową działalność gospodarczą (niniejszy paragraf nie dotyczy spółek handlowych) jest objęty ochroną przewidzianą Ustawą o prawach konsumenta, pod warunkiem, że Umowa Sprzedaży, którą zawiera ze Sprzedawcą, nie ma charakteru zawodowego. .</br>
                                
                                <br>Przedsiębiorca, o którym mowa w pkt 26 niniejszego regulaminu traci uprawnienia z tytułu ochrony konsumenckiej w przypadku, gdy Umowa Sprzedaży, którą zawarł ze Sprzedawcą posiada charakter zawodowy, który jest weryfikowany na podstawie wpisu tego przedsiębiorcy w Centralnej Ewidencji i Informacji o Działalności Gospodarczej Rzeczypospolitej Polskiej, w szczególności wskazanych tam kodów Polskiej Klasyfikacji Działalności.</br>
                                
                            
                            </span>
                        </p></br>
                        <span class="read-more-btn">Pokaż więcej</span>
                    </div>
            
                </div>
            


 </section>
				  
 <section class="regulamin2">
    <br>

    <?php
if (isset($_GET['message'])) {
    $message = $_GET['message'];
    echo '<p id="message">' . $message . '</p>';
}
?>

<script>
    setTimeout(function() {
        var messageElement = document.getElementById('message');
        if (messageElement) {
            messageElement.style.display = 'none';
        }
    }, 5000); 
</script>
    
    <h1><b>ANKIETA</b></h1>
    <form action="zapisz_ankiete.php" method="POST" id="forma">
        <br>
        <div class="forma2">
            <label id="ankie">Email</label>
            <input type="text" id="email" name="email" placeholder="Podaj maila" required>
            <?php
	        if(isset($_SESSION['e_email']))
	        {
		    echo'<div class="error_form">'.$_SESSION['e_email'].'</div>';
		    unset($_SESSION['e_email']);
	        }
	        ?>
        </div>
        </br>
        <br>
        <div class="forma2">
            <label id="spuszczanie">Jakim typem jesteś?</label>
            <select id="drop" name="typ" required>
                <option value=""></option>
                <option value="1">Gamer</option>
                <option value="2">Casual</option>
                <option value="3">Biurowiec</option>
            </select>
 
        </div>
        </br>
        <br>
        <div class="forma2">
            <label id="label-radio">Czy podoba ci się nasz sklep?</label>
        </div>
        <div class="form-radio">
            <label id="oczywiscie"><input type="radio" value="oczywiscie" name="ocena_sklepu">Oczywiście</label>
        </div>
        <div class="form-radio">
            <label id="niespecjalnie"><input type="radio" value="niespecjalnie" name="ocena_sklepu">Niespecjalnie</label>
        </div>
        <div class="form-radio">
            <label id="nie"><input type="radio" value="nie" name="ocena_sklepu">Nie</label>
        </div>

        </br>
        <br>
        <div class="forma2">
            <label id="spuszczanie">Czy poleciłbyś ten sklep znajomym?</label>
            <select id="drop" name="polecenie" required>
                <option value=""></option>
                <option value="TAK">TAK</option>
                <option value="NIE">NIE</option>
            </select>

        </div>
        </br>
        <br>
        <div class="forma2">
            <label id="text-arena">Co możemy zmienić żeby było lepiej?</label>
            <textarea name="sugestie" placeholder="Wpisz tutaj" rows="10"></textarea>
        </div>
        </br>

        <div class="forma2">
            <input type="submit" value="Zatwierdź">
        </div>
    </form>
</section>

<footer>Sklep internetowy &copy; 2023</footer>
</body>
</html>