<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>

    <?php
      //skrypt 1
    $sql =  "SELECT `nazwa` FROM `towary` WHERE `promocja`=1";
    $connect = mysqli_connect("localhost","root","","sklep");

    $rezultat = mysqli_query($connect,$sql);

    echo "<ul>";
        while ($row = mysqli_fetch_assoc($rezultat) ) {
          echo "<li>", $row["nazwa"],"</li>";
        }
    echo "</ul>";


      mysqli_close($connect);

     ?>


<form method="post">
<select name="towar">
  <option value="Gumka do mazania">Gumka do mazania</option>
  <option value="Cienkopis">Cienkopis</option>
  <option value="Pisaki 60 szt">Pisaki 60 szt</option>
  <option value="Markery 4 szt">Markery 4 szt</option>
</select>
<input type="submit" name="button" value="Zatwierdź">
</form>


<?php
//skrypt 2

if(isset($_POST['towar'])){
  $towar=$_POST['towar'];
    echo "Nazwa towaru:  ", $towar,"<br>";
    $connect = mysqli_connect("localhost","root","","sklep");
    $sql ="SELECT `cena` FROM `towary` WHERE nazwa=\"$towar\"";
    $rezultat1=mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($rezultat1);

echo "Cena przed promocją:  ", $row['cena'],"<br>";

$promotion = $row['cena'] * 0.85;
echo "Cena po promocji:  ", round ($promotion, 2);

}

 ?>

























  </body>
</html>
