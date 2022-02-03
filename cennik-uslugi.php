<html>
	<head>
		<meta charset='utf-8'>
		<title>Cennik Usług - Serce IT</title>
		<link rel='Stylesheet' href='styl.css'>
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
				<li><a href="outsourcing-it.php">Outsourcing IT</a></li>
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
		<table>
   		<tr>
        <th>Nazwa</th>
        <th>Cena</th>
        <th>Czas</th>
    	</tr>
        <?php
        $conn =mysqli_connect("localhost","root","","it");
        $zap="SELECT `Nazwa`, `Cena (zł)`, `Czas (h)` FROM `usługi`";
        $wynik=mysqli_query($conn,$zap);

        while($wiersz=mysqli_fetch_assoc($wynik)){
             echo "<tr><td>" .$wiersz['Nazwa']."</td><td>".$wiersz['Cena (zł)']."</td><td>" .$wiersz['Czas (h)']."</td></tr>";
        }
        mysqli_close($conn);
        ?>  
        </table>
			<hr>
		</div>
		<div id='stopka'>
			<p>Autor strony: <b>Ernest Rubaj</b></p>
		</div>
	</div>
	</body>
</html>