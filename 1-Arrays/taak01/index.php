<!doctype html>
    <head>
    </head>
    <body>
      <?php
      $studenten = array("Jared", "Colin", "Shano");
      $achternaam = array("Sackey", "Suso", "Fransman");
      $leeftijd = array("Jared"=>19, "Colin"=>22, "Shano"=>16);
      $klas = array("Jared"=>"9A", "Colin"=>"9D", "Shano"=>"9A");


      echo "Gegevens van Jared :" . "<br>";
      echo "Naam :" . $studenten[0] . "<br>";
      echo "achternaam :" . $achternaam[0] . "<br>";
      echo "leeftijd :". $leeftijd['Jared'] . "<br>";
      echo "klas :". $klas['Jared'] . "<br>";
    ?>
    </body>
    </html>