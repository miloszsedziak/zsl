<?php
session_start();//MUSI BYC NA KAZDEJ STRONIE
//$_SESSION["name"] = "Janusz";
 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 2</title>
  </head>
  <body>
    DRUGA STRONA<hr>
      <?php
            echo $_SESSION['name']
      ?>

              na stronie!<br>
      <?php

              echo "Identyfikator sesji: ", session_id();
       ?>

        <hr><a href="./sesja3.php">Trzecia Strona</a>

  </body>
</html>
