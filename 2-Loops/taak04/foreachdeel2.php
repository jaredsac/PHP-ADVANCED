<!DOCTYPE html>
<html>
<body>

<h2>klas</h2>


    
    <select>
    <option >kies je klas</option>
    <?php 
    $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
    foreach ($klassen as $value) {
        
    
    ?>
    <option ><?php echo $value?></option>
    <?php } ?>
    </select> 
    <input type="submit">


</body>
</html>
