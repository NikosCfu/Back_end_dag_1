<?php

$aanhef ="Dhr";

    $Voornaam ="Jan ";

    $Achternaam = "Jansen";

    $straat = "Kerkstraat";

    $postcode = "1234 AB";
    $woonplaats ="Alblasserdam";
    $Land  ="Nederland";



    echo $aanhef ;
        echo " " ;
        echo $Voornaam ;
        echo "" ;
        echo $Achternaam ;
        echo "<br> " ;

        echo $straat ;
        echo " ";
        echo $postcode ;
        echo " <br>";
        echo $woonplaats ;
        echo " <br>";
        echo  $Land ;
        echo "<br> " ;



//les1.4_oefening1

$namen = array("Piet", "Kees", "Jan", "Annabel");
echo $namen[0]," ", $namen[3];

//les1.4_oefening2
$namen = array("Piet", "Kees", "Jan", "Annabel");
$namen[2] = "Karel";
echo "<br>";
print_r ($namen) ;

//les1.4_oefenning3
 $supplies = array("Kaas"=>"2", "Melk"=>"4","Eieren"=>"16","Boter"=>"256");
 echo "<br>";
 print_r ($supplies) ;

 //les1.4_oefening4

 $supplies_1 = array( 
     array(1,"Kaas",2,10), 
     array(2,"Melk",4,8), 
     array(3,"eieren",16,14), 
     array(4,"Boter",256,44) 
 );
 echo "<br>";
 //print kaas
echo $supplies_1[0][1] ;
echo "<br>";
//print 14
print_r($supplies_1[2][3]) ; 

//les1.4_oefening5
$lengte = "weet ik veel";
echo "<br>";
echo strlen($lengte);

//les1.4_oefening6

$het_weer_vandaag = "Vandaag het is goed weer!";
echo "<br>";
echo $het_weer_vandaag ;
echo "<br>";

echo str_replace("goed", "slecht", $het_weer_vandaag );

//les1.4_oefening7

$coffee = "Cultivar a, trifecta instant skinny, espresso, con panna, crema spoon mocha, in coffee, sugar, french press medium latte trifecta instant to go. Breve skinny cinnamon grounds grinder, cortado, dark cup, crema percolator turkish, decaffeinated aromatic aftertaste redeye iced chicory. Single origin, steamed at seasonal, aged iced galÃ£o aftertaste beans sweet mug, extra filter, in, cappuccino, white con panna, frappuccino aftertaste frappuccino qui chicory. Grinder medium et so, and java, trifecta, at, extra cafÃ© au lait trifecta, organic blue mountain coffee dark single origin. Viennese, aroma filter saucer cinnamon and, white, to go, crema coffee so lungo grounds, cultivar percolator french press acerbic americano siphon. Steamed eu est blue mountain, mug decaffeinated cortado strong, so as mug espresso acerbic sugar french press aroma.";

echo "<br>";
$new_coffee = str_replace(".","",str_replace(",","  " ,strtolower($coffee)));
//echo str($coffee);
print_r (explode(" ",$new_coffee));

echo "<br>";

$students =
  array(
    array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith"),
    array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer"),
    array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel")
);
echo "<br>";
//test
echo $students[0]["first_name"];
echo "<br>";
echo "<br>";
echo "<table border='1'>
<tr>
<th>First name</th>
<th>Score</th>
<th>Last name</th>
</tr>
<tr>
<td>{$students[0]["first_name"]}</td>
<td>{$students[0]["score"]}</td>
<td>{$students[0]["last_name"]}</td>
</tr>
<tr>
<td>{$students[1]["first_name"]}</td>
<td>{$students[1]["score"]}</td>
<td>{$students[1]["last_name"]}</td>
</tr>
<tr>
<td>{$students[2]["first_name"]}</td>
<td>{$students[2]["score"]}</td>
<td>{$students[2]["last_name"]}</td>
</tr>

</table>";
echo "<br>";

$students_1 =
  array(
    array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith","student_id"=> rand(1,100)),
    array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer","student_id"=> rand(1,5)),
    array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel","student_id"=> rand(1,50)),
);
echo "<br>";
echo "<br>";
echo "<table border='1'>
<tr>
<th>First name</th>
<th>Score</th>
<th>Last name</th>
<th>Student Id </th>
</tr>
<tr>
<td>{$students_1[0]["first_name"]}</td>
<td>{$students_1[0]["score"]}</td>
<td>{$students_1[0]["last_name"]}</td>
<td>{$students_1[0]["student_id"]}</td>
</tr>
<tr>
<td>{$students_1[1]["first_name"]}</td>
<td>{$students_1[1]["score"]}</td>
<td>{$students_1[1]["last_name"]}</td>
<td>{$students_1[0]["student_id"]}</td>
</tr>
<tr>
<td>{$students_1[2]["first_name"]}</td>
<td>{$students_1[2]["score"]}</td>
<td>{$students_1[2]["last_name"]}</td>
<td>{$students_1[0]["student_id"]}</td>
</tr>


</table>";

echo "<br>";




        ?>