<?php 

// EXERCITIU 1 :

	// Sa se creeze un fisier index.php care, utlizand doua variabile
	// $x = 10; respectiv $y=5; sa afiseze urmatorul continut :
	// 10 + 5 = 15
	// 10 - 5 = 5
	// 10 * 5 = 50
	// 10 / 5 = 2
	echo "Exercitiu 1:"."<br/>";

	$x = 10;
	$y = 5;

	$adunare = $x + $y;
	$scadere = $x - $y;
	$inmultire = $x * $y;
	$impartire = $x / $y;


	echo $x." + ".$y." = ".$adunare."<br/>"; 
	echo $x." - ".$y." = ".$scadere."<br/>"; 
	echo $x." * ".$y." = ".$inmultire."<br/>"; 
	echo $x." / ".$y." = ".$impartire."<br/>"; 
	echo"<br/>";

// ********************************************************************


// 	EXERCITIU 2 :

// Scrieti un script care sa afiseze output-ul
// '1-2-3-4-5-6-7-8-9-10'
echo "Exercitiu 2:"."<br/>";

$number = 1;
$rezult = $number;
while($number<10) {
	$number++;
	$rezult = $rezult."-".$number;
}
echo $rezult."<br/>";
echo"<br/>";

// **********************************************************************



// 	EXERCITIU 3 :

// Sa se afiseze toate numerele din urmatorul array care sunt divizivlie cu 6
//  $numere = array( 6,4,15,12,36,89,45);


	echo "Exercitiu 3:"."<br/>";

	$numere = array( 6,4,15,12,36,89,45);
	foreach ($numere as $numar) {
		if ($numar%6 === 0) {
			echo $numar."<br/>";
		}
	}

	echo"<br/>";


	// **********************************************************************


	// 	EXERCITIU 4 :

// Scrieti un script care aduna toate numerele de la 0 la 30 si afisati rezultatul de forma:
// '0 + 1 + 2 + ... + 30 = ...'

echo "Exercitiu 4:"."<br/>";

$num = 0;
$sum = 0;
$rez = 0;
while($num < 30 ) {
	$num++;
	$sum = $sum + $num;
	$rez = $rez." + ".$num;
}

echo $rez." = ".$sum."<br/>";

echo"<br/>";


// **********************************************************************



// 	EXERCITIU 4 :

// Un client al unei banci depune initial la banca suma de 500euro cu o dobanda de 10% pe an.
// Sa se afiseze soldul per fiecare an, daca lasa banii la banca in 5 ani.


echo "Exercitiu 4:"."<br/>";

$ani = 1;
$suma = 500;

while($ani <= 5 ) {

	$suma =(int) ($suma + ($suma/10));
	echo "Suma totala din banca dupa anul ".$ani." este de ".$suma." euro"."<br/>"; 	
	$ani++;
}

 ?>


