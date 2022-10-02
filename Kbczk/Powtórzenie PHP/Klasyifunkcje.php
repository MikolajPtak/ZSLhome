<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

    //ZADANIE 1
    for ($k=0; $k<10 ; $k++) {
      echo "Bardzo lubie PHP ".($k+1)."<br>";
    }

    //ZADANIE 2
    function zad2($n){
        if ($n == 1){return 0;}
        for ($i = 2; $i <= $n/2; $i++){
            if ($n % $i == 0)
                return 0;
        }
        if ($n<100) {return 1;}
        else {
          return 0;
        }}

        echo "<br>";

        echo "13 =".zad2(13)."<br>";
        echo "11 =".zad2(11)."<br>";
        echo "49 =".zad2(49)."<br>";
        echo "12 =".zad2(12)."<br>";
        echo "111 =".zad2(111)."<br>";
        echo "17 =".zad2(17)."<br>";


        echo "<br>";


    //ZADANIE 1
    class osoba{

      var $imie;
      var $nazwisko;
      var $wiek;
      var $konto;

      //ZADANIE 2
      function __construct($imie="Przykład",$nazwisko="Przykładowe",$wiek="Przykładowy",$konto="KPrzykładowe")
      {
         $this->imie =$imie;
         $this->nazwisko = $nazwisko;
         $this->wiek = $wiek;
         $this->konto = $konto;
      }

      //ZADANIE 3
      function ZmienWiek($ZW)
      {
        $this->wiek = $ZW;
      }

      function ZmienKonto($ZK)
      {
        $this->konto= $ZK;
      }

      //ZADANIE 4
      function pokaz()
      {
        echo "<hr>".$this->imie." ".$this->nazwisko."<br>"."wiek: ".$this->wiek."<br>Stan konta: ".$this->konto."<br><br>";
      }

      //ZADANIE 5
      function KowalskiPremia()
      {
        if ($this->nazwisko=="Kowalski") {
          $this->konto+=($this->wiek*1000);
        }
      }
    }


      //TESTY
      $Macius = new Osoba;
      $Macius->pokaz();
      $Macius = new Osoba("Maciej","Kowalski","13","10");
      $Macius->pokaz();
      $Macius->ZmienWiek("14");
      $Macius->pokaz();
      $Macius->ZmienKonto("60");
      $Macius->pokaz();
      $Macius->KowalskiPremia();
      $Macius->pokaz();
    ?>

  </body>
</html>
