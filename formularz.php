<html>
	<head>
		<meta charset='utf-8'>
		<title>Formularz kontaktowy - Serce IT</title>
		<link rel='Stylesheet' href='styl1.css'>
	</head>
	<body>
	<div id='kontener'>
		<div id='baner'>
		<a href="strona-glowna.php"><img src='animacja.gif'>
		</div>
		<div id='rozwijane'>
		  <ol>
			<li><a href="#">O nas</a>
			  <ul>
				<li><a href="informacje-o-firmie.php">Informacje o firmie</a></li>
				<li><a href="stosowane-technologie.php">Stosowane technologie</a></li>
			  </ul>
			</li>
			<li><a href="#">Usługi</a>
			  <ul>
				<li></li>
				<li><a href="instalacja.php">Instalacja i konfiguracja systemów operacyjnych</a></li>
				<li><a href="sprzet.php">Sprzęt komputerowy</a></li>
				<li><a href="serwis.php">Serwis komputerów</a></li>
				<li><a href="projektowanie-stron.php">Projektowanie i akutalizacja stron WWW</a></li>
				<li><a href="hosting.php">Hosting</a></li>
			  </ul>
			</li>
			<li><a href="#">Cennik</a>
				<ul>
				  <li><a href="cennik-uslugi.php">Usługi</a></li>
				  <li><a href="cennik-sprzet.php">Sprzętu</a></li>
				</ul>
			  </li>
			<li><a href="#">Kontakt</a>
			  <ul>
				<li><a href="formularz.php">Formularz kontaktowy</a></li>
				<li><a href="adres.php">Adres firmy</a></li>
			  </ul>
			</li>
		  </ol>
		</div>
		<div id='glowny'>
		<hr>
			<h2>Kontakt</h2>
			<form>
			<table>
				<tr><td>Imię:</td> <td><input type='text' id='imie'></td></tr>
				<tr><td>Nazwisko:</td> <td><input type='text' id='nazwisko'></td></tr>
				<tr><td>E-mail:</td> <td><input type='text' id='email'></td></tr>
				<tr><td>Usługa/Sprzęt:</td> <td><textarea id='usluga'></textarea></td></tr>
				<tr><td></td> <td><input type='checkbox' id='zgoda'>Zapoznałam/em się z <a href="regulamin.php">regulaminem</a></td></tr>
				<tr><td></td> <td><input type='reset' value='Resetuj'><input type='button' value='Prześlij' onclick='Przeslij()'></td></tr>
			</table>
			</form>
			<p id='wynik'></p>
			<hr>		
			<script>
				function Przeslij(){
					var imie = document.getElementById('imie').value;
					var nazwisko = document.getElementById('nazwisko').value;
					var usluga = document.getElementById('usluga').value;
					var zgoda = document.getElementById('zgoda').checked;
					
					if (zgoda == true){
						document.getElementById('wynik').innerHTML= imie.toUpperCase() +' '+nazwisko.toUpperCase() +'</br> Treść Twojej sprawy: '+usluga+'</br> Na podany e-mail zostanie wysłana oferta'}
					else {document.getElementById('wynik').innerHTML='<span style="color:red">'+'Musisz się zapoznać z regulaminem'+'</span>'}}
			</script>
		</div>	
		<div id='stopka'>
			<p>Autor strony: <b>Ernest Rubaj</b></p>
		</div>
	</div>
	</body>
</html>