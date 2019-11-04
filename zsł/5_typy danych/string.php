<?php
echo<<< FORM
<form method="post">
  <input type="text" name="imie" placeholder="Wpisz imie"><br><br>
  <input type="submit" name="button" value="zatwierdz">
</form>
FORM;


if(isset($_POST['imie'])){
  $imie=$_POST['imie'];
  echo "Dane przed poprawą: ", $imie,'<br>';
}




//zamiana na małe literki
echo strtolower($imie),'<br>';

//zamiana na duże litery
echo strtoupper($imie),'<br>';

//zamiana pierwszej litery na dużą
echo ucfirst($imie),'<br>';

//zamiana wszystkich pierwszych na duże
echo ucwords($imie),'<br>';

//zamiana wszystkich liter na małą a pierwszą na duża
echo ucfirst(strtolower($imie));

##########################################################################################################################################


$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

echo $lorem,'<br>';
$col = wordwrap($lorem,40,'<br>');
$col = wordwrap($lorem,40,'<hr>');
echo $col,'<br>';

//czyszczenie zawartości bufora
ob_clean();


##########################################################################################################################################

//usuwanie białych znaków
$name = 'Tomasz';
$name1 = '  Tomasz  ';

echo "Długość zmiennej $name: ",strlen($name),'<br>';//6
echo "Długość zmiennej $name1: ",strlen($name1),'<br>';//6



 echo strlen(ltrim($name1));
 echo strlen(rtrim($name1));
 echo strlen(trim($name1)),'<br>';

 //przeszukiwanie ciągów znakówarning

 $address = 'Poznań, ul. Przełajowa 4, tel. (61) 123-45-67';
 $search = strstr($address, 'tel');
 echo $search,'<br>';//tel. (61)itd

 $address = 'Poznań, ul. Przełajowa 4, tel. (61) 123-45-67';
 $search = strstr($address, 'tel', true);
 echo $search,'<br>';//Poznań, ul. Przełajowa 4,

 $address = 'Poznań, ul. Przełajowa 4, tel. (61) 123-45-67';
 $search = strstr($address, 'Tel');
 echo $search,'<br>';//tel. itp


echo strstr('zsl@gmail.com','@');//gmail.com
echo strstr('zsl@gmail.com','64');//gmail.com //ASCII @ - 64

//pozycje

$pos = strpos('abcdefg', 'cde');
echo $pos, '<br>'; //2

$pos = strpos('abcab', 'ab');
echo $pos, '<br>'; //2


/*
sprawdź czy ciąg o nazwie text1 znajduje się w ciągu text2 tak!
*/

$text1 = "abcdabcd";
$text2 = "abs";

if(strpos($text1,$text2) === false){
echo "Ciąg $text2 nie został znaleziony w ciągu $text1",'<br>';
}
else{
  echo "Ciąg $text2 został znaleziony w ciągu $text1",'<br>';
}

//przetwarzanie ciągu znaków

$replace = str_replace('zsl','szkola','zsl ul. Przełajowa 4');
echo $replace,'<br>';

//substr

echo substr('Janusz Kowalski',3),'<br>';//usz Kowalski
echo substr('Janusz Kowalski',-3),'<br>';//ski
echo substr('Janusz Kowalski',7,5),'<br>';//Kowal


//zamiana polskich znaków

$login = 'żąkil';
$cansore = array('ą', 'ę', 'ś', 'ć', 'ż', 'ź', 'ó', 'ń', 'ł');
$replace = array('a', 'e', 's', 'c', 'z', 'z', 'o', 'n', 'l');

$newLogin = str_replace($cansore, $replace, $login);
echo $newLogin,'<hr>';

$text = <<< TEXT
zsł - Zespół
  Szkół
  Łączności
TEXT;


echo "Przed wywołaniem funkcji nl2br: <br>$text";
echo "<br> Po wywołaniu funkcji nl2br: <br>";
echo nl2br($text);


























 ?>
