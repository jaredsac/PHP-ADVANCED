<!DOCTYPE html>
<html>
<head>
  <style>
    table, th,td
    { padding:<?php echo $_POST['padding'];?>px;
      border:<?php echo $_POST['border'];?>px solid black;
      border-collapse:collapse;
    }
    body{
      background-color:<?php echo $_POST['BGkleur'];?>;
      color:<?php echo $_POST['tekstkleuren']; ?>;
    }
  </style>
</head>
<body>
<table>
      <tr>
        <th>key</th>
        <th>Value</th>
      </tr>
          <?php
          $Jgegevens = array("Naam"=>"Jared Sackey", "Leeftijd"=>19, "Been"=>"Rechter been",
          "Klas"=>"9A", "Hobbies"=>"Gamen, Voetballen", "Woonplaats"=>"Amsterdam",
          "Favo club"=>"Manchester United");
          function maakrijTD($j, $j_value){
            echo "<tr><td>$j</td>";
            echo "<td>$j_value</td></tr>";
          }
          foreach($Jgegevens as $j => $j_value) {
            maakrijTD($j, $j_value);
        
          }
          ?>
</table>
</body>
</html>

