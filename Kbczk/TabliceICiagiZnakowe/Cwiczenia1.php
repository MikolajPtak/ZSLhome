<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>







    <?php


    $Zadanie["Chleb"] = "5";
    $Zadanie["Ziemniaki"] = "8";
    $Zadanie["Jabłka"] = "3";
    $Zadanie["Miód"] = "13";


    echo "Tablica Przed posortowaniem:<br>";
    foreach ($Zadanie as $key => $value) {echo "$key => $value <br>";}
    echo "<br><hr>";


    ksort($Zadanie);
    echo "Tablica po posortowaniu alfabetycznym:<br>";
    foreach ($Zadanie as $key => $value) {echo "$key => $value <br>";}
    echo "<br><hr>";

    arsort($Zadanie);
    echo "Tablica po posortowaniu od najdroższego:<br>";
    foreach ($Zadanie as $key => $value) {echo "$key => $value <br>";}
    echo "<br><hr>";



     ?>

  </body>
</html>
