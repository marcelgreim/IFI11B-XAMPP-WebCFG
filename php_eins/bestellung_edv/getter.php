<?php
$bestellung = $_POST['menge'];


$preis=$bestellung*23.50;

if ($preis < 100) {
	$preis+5.50;			
}
else {
		if ($bestellung >= 100) {
				$preis2=$preis-($preis/100*15);
				$preis3=$preis2+($preis2/100*7);
				echo " $preis3";
		}
		elseif ($bestellung >=50) {
				$preis2=$preis-($preis/100*10);
				$preis3=$preis2+($preis2/100*7);
				echo " $preis3";
		}
		elseif ($bestellung >=10) {
				$preis2=$preis-($preis/100*5);
				$preis3=$preis2+($preis2/100*7);
				echo " $preis3";
}


?>