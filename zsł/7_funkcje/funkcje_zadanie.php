<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="number" name="x" placeholder="liczba x">
      <input type="number" name="y" placeholder="liczba y">
      <input type="radio" name="działanie" value="suma">suma
      <input type="radio" name="działanie" value="przedział">przedział
      <input type="submit" name="button" value="zatwierdz">
    </form>
<?php
    /*
    napisz menu w którym użytkownik wybiera jedno z działań,
    wykorzystaj do tego celu pola radio (suma, przedział)
    suma - pobierze dane z dwóch pól tekstowych
     i zsumuje je wykorzystując funkcje suma
    przedział - pobierze dane z dwóch pól tekstowych
     i wyświetli liczby z przedziału rosnąco z przedziału
     wykorzystując funkcję przedział
    */

      if(!empty($_POST['x']) && !empty($_POST['y']) && !empty($_POST['działanie'])){

      $x=$_POST['x'];
      $y=$_POST['y'];
      $działanie=$_POST['działanie'];


      switch($działanie){
        case 'suma':
        $działanie= 'suma';
        $cos=1;
        break;
        case 'przedział':
        $działanie = 'przedział';
        $cos=2;
        break;
      }
      echo $działanie,'<br>';
      function suma($x,$y){
        return $x+$y;
      }


      function przedział($x,$y){
        while ($x <= $y) {
          echo $x;
          $x++;
        }
      }


    if($cos == 1)
    {
      echo suma($x, $y),'<br>';
    }else {
      echo przedział($x, $y);
    }

}
    ?>
  </body>
</html>
