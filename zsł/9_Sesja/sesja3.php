<?php
session_start();//MUSI BYC NA KAZDEJ STRONIE
//$_SESSION["name"] = "Janusz";
unset($_SESSION['name']);
session_destroy();
 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 3</title>
  </head>
  <body>
    TRZECIA STRONA<hr>
      <?php
            echo $_SESSION['name']
      ?>

              na stronie!<br>
      <?php

              echo "Identyfikator sesji: ", session_id();
       ?>

        <hr><a href="./sesje.php">Strona Startowa</a>

  </body>
</html>
