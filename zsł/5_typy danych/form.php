<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <link rel="stylesheet" href="../css/form.css">
    <meta charset="utf-8">
    <title>form</title>
  </head>
  <body>



  <?php
  require_once './form2.php';
    if(!empty($_POST['city']) && !empty($_POST['name'])) {
        $city=$_POST['city'];
        $name=$_POST['name'];
        $address= nl2br($_POST['adres']);

require_once './form3.php'

      ?>
      <table>
        <tr>
          <th>Imie</th>
          <th>Miasto</th>
          <th>Adres</th>
        </tr>
        <tr>
          <td><?php echo $name; ?></td>
          <td><?php echo $city; ?></td>
          <td><?php echo $address; ?></td>
        </tr>

      </table>
      <?php

    //  echo "Miasto: $city",'<br>';
    //  echo "Imię: $name";



  }
   ?>





























  </body>
</html>
