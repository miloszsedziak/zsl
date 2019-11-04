<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/tabliczka.css">
    <title></title>
  </head>
  <body>
    <table>
    <?php

    $row = 1;
    $s=14;
    do {
      $kolumna = 1;
      echo '<tr>';
        do{
          $wynik = $row * $kolumna;
          if ($kolumna+$row==$s+1){
          echo '<td class="red">', $row, '*', $kolumna, '</td>';
          }
      else
      {
        if($row==$kolumna){
      echo '<td class="blue">', $row, '*',  $kolumna, '</td>';
      }
      else
      {
      echo '<td>', $row, '*', $kolumna, '</td>';
      }
      $kolumna++;
    }
    while($kolumna <= 10);

    $row++;
    echo '</tr>';
  }while($row <= 10);
}
     ?>
</table>
  </body>
</html>
