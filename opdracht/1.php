<!DOCTYPE html>
<html>
<body>

<?php 
$kleuren = array("red", "blue", "green", "black", "brown")
?>
<form method="post" action="2.php">
<select name="tekstkleur">
    <option value="">--Please choose an option--</option>
    <?php
    foreach($kleuren as $tekstkleur) { ?>
      <option value="<?php echo $tekstkleur; ?>">tekstkleur: <?php echo $tekstkleur; ?> </option>
  <?php
    } ?>
</select>
</br><br>
<select name="achtergrondskleur">
    <option value="">--Please choose an option--</option>
    <?php
    foreach($kleuren as $achtergrondskleur) { ?>
      <option value="<?php echo $achtergrondskleur; ?>">achtergrondskleur: <?php echo $achtergrondskleur; ?> </option>
  <?php
    } ?>
</select>
</br><br>
<label name="tabelranddikte" for="tabelranddikte">tabelranddikte (px):</label></br>
        <input type="text" name="tabelranddikte"><br></br>
<label name="padding" for="padding">padding (px):</label></br>
        <input type="text" name="padding"></br></br>

        <input type="submit">
</form>
</body>
</html>