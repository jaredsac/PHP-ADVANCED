<!DOCTYPE html>
<html>
<body>

<h2>Forms</h2>

<form action="advanced-2.php" method="post">
  <label for="tabel">Tabelranddikte (px):</label><br>
  <input type="text" name=border ><br>
  <label for="tabel">cel-padding (px):</label><br>
  <input type="text" name=padding ><br><br>
    <label for="tabel">Achtergrondkleur:</label><br>
    <select name="BGkleur" ><br>
    <option >kleur</option>
    <?php
    $kleuren = array("red", "lightblue", "green", "brown");
    foreach($kleuren as $value){
        ?>
    <option><?php echo $value?></option>
    <?php } ?>
    </select><br><br>
    <label for="tabel">tekstkleuren:</label><br>
    <select name="tekstkleuren"><br>
    <option >kleur</option>
    <?php
    $tekstkleuren = array("red", "blue", "green", "black", "brown", "white");
    foreach($tekstkleuren as $value){
        ?>
    <option><?php echo $value?></option>
    <?php } ?>
    </select><br><br>
  
  <input type="submit" value="Verstuur">
</form> 



</body>
</html>