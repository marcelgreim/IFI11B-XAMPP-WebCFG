<html>
<head>
<title>Testseite Zwei</title>
</head>
<body>
<h1> Hier ist der HTML-Teil</h1>
<?php echo("<h1>Hier ist der PHP-Teil</h1> <br>");

//Variablen

$var1=10;
$var2=-3.2;
$var3="Tester";
$var4=$var1+$var2;
$var5="Test";

echo "<br> Variable1 = $var1";
echo "<br> Variable2= $var2";
echo "<br> Variable3= $var3";
echo "<br> Variable4 (Rechnung) = $var4";

echo "<br> Zusammensetzen".$var1.$var2;

echo "<p>Vergleich von Variablen</p>";

if ($var1>$var2) {
		echo "<p> Yes Variable 1 ist größer als Variable 2</p>";
}
else {
		if ($var1==$var2) {
			echo "<p> Beide Variablen sind gleich</p>";
		}
		else {
		}
	echo "<p> Variable 2 ist größer als Variable 1</p>";
		}
		

echo "<h1> ReeRoo WeeWoo</h1>";

switch ($var5) {
	case "Test":
	echo "Ja das ist Test";
	break;
	
	case "Test2":
	echo "Ja das ist Test2";
	break;
	
}

for ($i=6;$i>=0;) {
	echo "$i ";
	$i--;
}
		
		
echo "<br><h1> While-Schleife</h1>";

$j=5;
$k=10;
while ($j < $k) {
	echo "$j";
	$j++;
}
		
echo "<br><h1> Do While</h1>";

$x=5;
$y=10;
do {
	echo "$y";
	$y--;
}
while($y>$x);


		
echo "<br> <h1> Array</h1>";

$feld[0]=9;
$feld[1]=10;
$feld[2]=11;
$feld[3]=44;
		
echo "<br>Array $feld[0] $feld[1] $feld[2] $feld[3] ";

foreach ($feld as $b)
{
	echo "<br> $b";
	
}

for ($i=0; $i<4; $i++) {
	echo " $feld[$i]";
	
}
		
?>
</body>
</html>