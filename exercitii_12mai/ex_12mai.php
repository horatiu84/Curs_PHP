<?php

        echo 'Rezultatul este :' .((8 + 2) - (5 + 1)); // 4
        echo "</br>";
        echo 'Rezultatul este :' . (8 + ((4 + 5) - (3 + 4))); // 10
        echo "</br>";
        echo 'Rezultatul este :' . 4 * (2 + 3); // 20
        echo "</br>";
        echo 'Rezultatul este :' . (5 * 3) + (4*3); // 27
        echo "</br>";
        echo 'Rezultatul este :' . pow(3,2); // 9 => 3x3 = 9
        echo "</br>";
        echo 'Rezultatul este :' . 5 * pow(2,3) + 6;  // 18 => (5 x 8) + 6 => 40 + 6 => 46
        echo "</br>";
        echo 'Rezultatul este :' . ((6 * 3) +  (7 % 5)); // 20 => 18 + 2 => 18 rest 2 ( din 7 modulo 5 ) => 18 + 2 = 20
        echo "</br>";
        echo 'Rezultatul este :' . number_format((10 * pow(2,3) + pow(2,3) + (3 + 2 )));


        /*  Number format => formateaza numarul si elimina virgula, dupa avem 10 * 2 la putera 3 => 2x2x2 + 2 la puterea 3 la fel

            10 x 8 = 80 + 8 + 5 => 88 + 5 = 93

            In acest exercitiu nu era necesar formatarea dar l-am pus ca sa intelegeti la ce ne ajuta, mai jos, aveti un
        exercitiu cu number_format
          */
        echo  "</br>";

        echo  'Rezultatul este : ' . number_format(7.40);
        /*  Pentru a elimna virgula adaugam number_format

        Rezultatul este 7 => se va elimina virgula de dupa el adica ( punctul ala e considerat virgula => sau float

        automat .40 nu va mai aparea, incercati si voi

        */
        echo  "</br>";

        /* String-uri => text */

     //   Exemple de afisare a textului

        // 1 . Adaugand o variabila

        $name = "Horatiu";
        echo $name; // afisam Cecilia => Putem folosi atat ghilimele duble cat si simple, dar nu COMBINATE!, ca produce o eroare fatala
        echo  "</br>";
        // 2. Adaugand 2 variabile si folosind simbolul .= ( punct si egal )
        $name_1 = "Horatiu";
        $name_2 = "Salut! ";

      echo  $name_2 .= $name_1;  // va afisa Salut Cecilia

        // 2 Varianta 2 de la aceasta metoda utilizand doar . ( simbolul unirii )
        echo  "</br>";
        $n = "Salut!";
        $b = "Horatiu";

        echo $n . " " . $b;
        echo  "</br>";
        
        // Utilizarea Heredoc

echo <<< TEXT
Utilizand aceasta metoda putem afisa un string adica prin Heredoc si se pot adauga variabile \r\n
de exemplu : $b  
TEXT;
            // nu trebuie sa existe spatiiiiiiiiiii !!!!!!  :) :)

// Newdoc

echo  "</br>";
echo  "</br>";
echo <<< 'HORATIU'
Textul la Newdoc, diferenta dintre acestea este ca la Heredoc nu se folosesc ghilimele, dar la Newdoc se folosesc si de asemenea nu se pot 
folosi direct variabile in acest tip de metoda
HORATIU;

echo  "</br>";
        // ARRAY Asociativ

        $member = [
            'id'=> 1,
            'name'=>'Horatiu',
            'country'=>'Romania',

        ];

        // ID => Key  => ( operator de asociere )
        // 1 => Valoare


        // Pentru a afisa putem folosi un foreach, dar momentan nu am trecut asa ca utilizam echo

        // afisare
        echo  'Numele este :' .$member['name']; // afisam Numele intre paranteze patrate punem key ( name ) => intre ghilimele
        echo  "</br>";
        echo   'Provine din  : '. $member['country']; // afisam Tara de origine intre paranteze patrate punem key ( country )=> intre ghilimele

    // Array indexat

        // lista de cumparaturi
        echo  "</br>";
        $list = ['Orez','Ceapa','Branza','Iaurt']; // 3 elemente in lista !! ( totul incepe de la 0 nu de la 1 )

        echo $list[0]; // 0 este numar de index, adica totul incepe de la 0, nu de la 1 => "Orez" are nr 0, nu 1
        echo  "</br>";
        echo "<pre>"; // am afisat mai frumos
        var_dump($list); // am afisat cu var_dump => key si valoarea

    // Array in array
        echo  "</br>";
    $lista_masini = array(
    array('Model' => 'AUDI', 'HONDA'),
    array('Model' => 'DACIA', 'LADA'),
    array('Model' => 'MERCEDES', 'RENAULT', 'sub_array' => array('roti' => 4), 'sub_sub_array' => array('usi' => 4))
);

echo $lista_masini[0]['Model']; // afiseaza AUDI din primul sub-tablou (sub-array)
echo "<br>";
echo $lista_masini[2]['sub_array']['roti']; // afiseaza 4 din sub-tabloul (sub-array) al treilea element al matricii principale
echo "<br>";


    // Actualizarea unui array + adaugare unei noi valori

    $famili = array('Matusa','Unchi');
    echo $famili[0]; // afisam Matusa
    echo $famili[0] = "Verisoara"; // actualizam Matusa cu Verisoara
    $famili[2] = "Verisor"; // pare ca merge si fara a utiliza echo 
        echo "<pre>";
        var_dump($famili);

        

        // Conversia din Celsius in  Fahrenheit cu. urmatoarea formula  F = (C * 1.8) + 32  

        $temp_Celsius = 10;
        $temp_Fahrenheit = ($temp_Celsius * 1.8) + 32;
        echo 'Temeperatura Fahrenheit este : '.$temp_Fahrenheit.'<br/>';

        //  calculati cat la suta din 500 reprezinta numarul 125
        // matematic, folosid regula de 3 simpla : daca 500 reprezinta 100%, atunci 125 reprezinta x
        // => x = (125 * 100)/500

        $x = (125 * 100)/500;
        echo 'Cat la suta din 500 reprezinta numarul 125? Raspuns :'.$x.'<br/>';
        //un exercitu cu calcularea :  "2023" + "douamidouazecisitrei" + "36star3" = ?
        
        //echo "2023"+"douamidouazecisitrei"+"36star3".'<br/>'
        // o sa dea eroare deoarece nu reuseste sa converteasca stringul "douamidouazecisitrei"
        // celelalte doua stringuri pot fi convertite : 
        // primul in 2023 si al doilea in 36(ignorandu-se restul caracterelor de dupa primele doua cifre)


        
        // perimetrul unui triunghi cu laturile de 12cm, 16cm și 20cm.

        $latura1 = 12;
        $latura2 = 16;
        $latura3 = 20;

        $perimetruTriunghi = $latura1 + $latura2 + $latura3;
        echo 'Perimetrul unui triunghi cu laturile de 12cm, 16cm si 20cm este de : '.$perimetruTriunghi.'cm'.'<br/>'; 

        //Adauga si  aria unui cerc cu raza de 5cm. ( calculeaza )

       echo 'Aria unui cerc cu raza de 5cm este de : '.pi()*pow(5,2).' cm'.'<br/>';


?>

