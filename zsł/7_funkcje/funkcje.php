<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
function value($a)
{
  if ($a>=0) {
    return "dodatnia";}
  else if($a=0){
    return "Zero";
  }

else
      {
  return "Ujemna";
      }
}


echo value(-1); //ujemna
echo gettype(value(-1)); //string

function getValue():int{
  return 10.99;
}

echo getValue(),'<br>';//10


####################################################################################

$x=10;
function show(){
  echo "Wartosc zmiennej \$x wynosi: $GLOBALS[x] ",'<br>';
  //echo $GLOBALS['x'];
}

show();


$y=20;
function show1(){
  global $y;
  echo "Wartosc zmiennej \$y wynosi: $y",'<br>';

}

show1();

######################################################################################

function sum(){
  $number=10;
  echo "\$liczba wynosi: $number<br>";
  $number +=10;
}

sum();
sum();


function sum1(){
  static $number=10;
  echo "\$liczba wynosi: $number<br>";
  $number +=10;
}

sum1();
sum1();
sum1();

####################################################################################
//ARGUMENTY

function add($x,$y = 1){
return $x + $y;
}

$z=3;

echo add(5),'<br>';
echo add(5, 10),'<br>';
echo add($z),'<br>';

#######################################################################################
//ARGUMENTY I TYPY DANYCH

function multi(float $x, int $y){
  return $x*$y;
}

echo multi (3,4),'<br>';
echo multi (2.5,4),'<br>';
echo multi (4,2.5),'<br>';


/*
napisz menu w którym użytkownik wybiera jedno z działań,
wykorzystaj do tego celu pola radio (suma, przedział)
suma - pobierze dane z dwóch pól tekstowych
 i zsumuje je wykorzystując funkcje suma
przedział - pobierze dane z dwóch pól tekstowych
 i wyświetli liczby z przedziału rosnąco z przedziału
 wykorzystując funkcję przedział
*/
 ?>
  </body>
</html>
