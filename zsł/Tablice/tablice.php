<?php

$colors = array("Red","Green","Blue");
$colors[3] = "Magenta";

  //for ($i=0; $i < count($colors); $i++){
    //$j=$i+1;
  //echo "Kolor $j: $colors[$i] <br>";
    function ShowaArray($colors){
    for ($i=0; $i < count($colors); $i++){
      $j=$i+1;
      echo "Kolor $j: $colors[$i] <br> ";
    }

}

  echo ShowaArray($colors), '<hr>';

  ##############################################################################

//tablice asociacyjne


$data = array(
"Name" => "Janusz",
"Surname" => "Nowak",
"Age" => 20,
"Country" => "Polska"
);

//echo $data["country"],'<br>';

function ShowaArrayAssoc($data){
  foreach ($data as $key => $value)
  echo "$key: $value <br>";
}

echo ShowaArrayAssoc($data), '<hr>';


################################################################################

//tablice wielowymiarowe

$student = array(
   array("Anna", "Nowak", "Poznan"),
   array("Tomasz"),
   array("Krystyna", "Pawlak"),
   array("Anna", "Pawlak"),
 );

//echo $student[2][0];


function ShowArray1($student){
for($i=0; $i < count($student); $i++){
for($j=0; $j <count($student[$i]); $j++){
  echo $student[$i][$j];
  echo " ";
      }
      echo "<br>";
    }
}
echo ShowArray1($student),'<hr>';

function ShowArray2($student){
foreach ($student as $value){
foreach ($value as $cos){
  echo "$cos ";
}
echo "<br>";
}
}
echo ShowArray2($student), '<hr>';

################################################################################
/*
zad. dom.
utworzyc tablice 3-wymiarową oraz 5-wymiarową
napisz do tych tablic funkcje wyswietlające DomainException*/

$tab = array(10, 1, 15, 20, 100, 8);

function ShowArraySort($tab){
foreach ($tab as $value){
  echo "$value", "<br>"  ;
}
}

ShowArraySort($tab);
echo "<br>";
sort($tab);

ShowArraySort($tab);
echo "<br>";

rsort($tab);
ShowArraySort($tab);
echo "<br>";
echo "<hr>";



$tabAssoc =  array(
"Name" => "Janusz",
"Surname" => "Nowak",
"Age" => 20,
"Country" => "Polska"
);

 ShowaArrayAssoc($tabAssoc);
 echo "<br>";

//sortowanie według wartości niemalejącej

 asort($tabAssoc);
 ShowaArrayAssoc($tabAssoc);
 echo '<br>';

 //sortowanie według wartości nierosnąco

  arsort($tabAssoc);
  ShowaArrayAssoc($tabAssoc);
  echo '<br>';

  //sortowanie według klucza niemalejąco

   ksort($tabAssoc);
   ShowaArrayAssoc($tabAssoc);
   echo '<br>';

   //sortowanie według klucza nierosnąco

    krsort($tabAssoc);
    ShowaArrayAssoc($tabAssoc);
    echo '<br>';
    echo '<hr>';

##################################################################################

//wyświetlanie danych

var_dump($tabAssoc);
echo "<hr>";

print_r($tabAssoc);
echo "<hr>";

echo "<pre>";
print_r($tabAssoc);
echo "</pre>";

/*echo "<pre>";
var_dump($tabAssoc);
echo "</pre>"; nie działa */


























 ?>
