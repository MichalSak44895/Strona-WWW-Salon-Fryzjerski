<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title> Salon fryzjerski </title>
</head>
<body>
<div id="top">
<img src="baner.png"> 
</div>
<div id="menu">
<a class="mennu" href="index.html"> STRONA GŁÓWNA </a>
<a class="mennu" href="uslugi.html"> NASZE USŁUGI </a>
<a class="mennu" href="kontakt.html"> KONTAKT </a>
<a class="mennu" href="rejestracja.php"> ZAPISY NA STRZYŻENIA ONLINE </a>
<a class="mennu" href="https://www.fryzomania.pl/"> Polecane strony </a>
</div>
<div id="right">
<?php
if(isset($_POST["oblicz"]))
{
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$data = $_POST['data'];
	$godzina = $_POST['godzina'];
	$imiee = $_POST['imiee'];
	$nazwiskoo = $_POST['nazwiskoo'];

$con = mysqli_connect('localhost', 'michalsak', 'M@gdalena1', 'sakos');
$query = "INSERT INTO salon (Imie, Nazwisko, Data, Godzina, Imie_fryzjera, Nazwisko_fryzjera)
 VALUES ('$imie', '$nazwisko', '$data', '$godzina', '$imiee', '$nazwiskoo');";                         
if (mysqli_query($con, $query))
	{
		echo ("Klient/ka ".$imie." ".$nazwisko." został/a zapisany/a na wizytę. </br>");
	}
	else
{
	echo ("błąd zapytania1");
}

	mysqli_close($con);
}
?>
</div>
<div id="left">
<center>
<img class="zdjecie" src="cos1.png"> <br>
<img class="zdjecie" src="cos.png"><br>
<img class="zdjecie" src="cos2.png"><br>
</center>
</div>
<div id="stopka">
<p> Autor strony: INiS1_3.1, Nr albumu: 44895 </p>
</div>
</body>
</html>