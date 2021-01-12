<!DOCTYPE html>
<html>
<body>

<?php
$studenten = array("Klaas", "Achmed", "lola");
$voornaam = array("Klaas"=>"klaas", "Achmed"=>"Achmed", "lola"=>"Lola");
$achternaam = array("Klaas"=>"Diedrikson", "Achmed"=>"Mishallah", "lola"=>"Groeneveld");
$leeftijd = array("Klaas"=>"24", "Achmed"=>"18", "lola"=>"19");
$klas = array("Klaas"=>"0C", "Achmed"=>"0A", "lola"=>"0D");
echo $voornaam['Klaas'] . $achternaam["Klaas"] . "is " . $leeftijd["Klaas"] . "en zit in klas " . $klas["Klaas"];
?>

</body>
</html>