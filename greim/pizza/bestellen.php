<?php
echo "<html><head><title>Ihre Bestellung</title></header><body bgcolor=\"yellow\"><center><h1>Ihre Pizzabestellung</h1><br>";

$vname = $_GET["vname"];
$nname = $_GET["nname"];
$strasse = $_GET["strasse"];
$hnr = $_GET["hnr"];
$plz = $_GET["plz"];
$ort = $_GET["ort"]; 
$bar = $_GET["bar"];
$kreditkarte = $_GET["kreditkarte"];
$zutaten = $_GET["zutaten"];

$handle = fopen("c:\\xampp\\htdocs\owned.txt", "rw+");


echo "Vorname: $vname<br>";
echo "Nachname: $nname<br>";
echo "Strasse: $strasse <br>";
echo "Hausnummer: $hnr <br>";
echo "PLZ: $plz <br>";
echo "Ort: $ort<br>";


echo "<p> Sie haben eine Pizza mit folgenden Zutaten bestellt: </p>";

if ($zutaten[0] == 'on') {
	echo "<p> Schinken</p>";
}

else {}

if ($zutaten[1] == 'on') {
	echo "<p> Salami</p>";
}
else{}

if ($zutaten[2] == 'on') {
	echo "<p>Zwiebeln</p>";
}
else {}

if ($zutaten[3] == 'on') {
	echo "<p>Pepperoni</p>";
}

else{}

if ($kreditkarte == 1) {
	echo "<p>Sie haben als Zahlungsmethode: Kreditkarte ausgewählt</p>";
}

else {
	echo "<p>Sie haben als Zahlungsmethode: Bar ausgewählt</p>";
}

fwrite($handle, "Schinken: $zutaten[0]");
fwrite($handle, "\r\n");
fwrite($handle, "Salami: $zutaten[1]");
fwrite($handle, "\r\n");
fwrite($handle, "Zwiebeln: $zutaten[2]");
fwrite($handle, "\r\n");
fwrite($handle, "Pepperoni: $zutaten[3]");


fclose($handle);


echo "</center></body></html>";
?>