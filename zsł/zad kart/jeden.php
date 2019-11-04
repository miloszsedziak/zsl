<?php

echo<<< FORM
<form method="post">
  <input type="text" name="imie" placeholder="Wpisz imie"><br><br>
  <input type="number" name="wiek" placeholder="Wpisz wiek"><br><br>
  <input type="submit" name="button" value="zatwierdz">
</form>
FORM;

if(isset($_POST['imie'],$_POST['wiek'])){
  $imie=$_POST['imie'];
  $wiek=$_POST['wiek'];
  echo "Dane przed poprawą: ", $imie, '<br>';

  echo ucfirst(strtolower($imie)),'<br>';

  echo substr($imie, 10);

}

echo "Długość przed poprawą $imie: ",strlen($imie),'<br>';
echo strlen(trim($imie)),'<br>';
