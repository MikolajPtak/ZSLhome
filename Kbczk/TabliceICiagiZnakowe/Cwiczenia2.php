<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


    $string = "Mikołaj Ptak";
    $imieinazw = explode(" ",$string);
    echo $imieinazw[1];


    echo "<br><br>";

    $email = "mikolaj.szkola@gmail.com";
    echo substr($email,15);

    echo "<br><br>";

    echo htmlspecialchars("<p>...</p> To znacznik do tworzenia paragrafów");

    echo "<br><br>";

    if (!empty($_GET["input"])) {
      $str = $_GET["input"];
      if ($str==strrev($str)) {
        echo "$str jest palindromem.";
      }else {
        echo "$str NIE jest palindromem.";
      }
    }else {
        echo "Proszę podać ciąg znaków";
    }




     ?>

    <form class="" action="Cwiczenia2.php" method="get">
      Sprawdź czy ciąg jest palindromem:
      <input type="text" name="input">
      <input type="submit" value="Zatwierdź">
    </form>
  </body>
</html>
