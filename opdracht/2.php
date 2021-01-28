<!DOCTYPE html>
<html>
    <style>
body {
        background-color: <?php echo $_POST["achtergrondskleur"]; ?>;
        color: <?php echo $_POST["tekstkleur"]; ?>;


    }

    table, tr, td{
        border: <?php echo $_POST["tabelranddikte"]; ?>px solid black;
        padding: <?php echo$_POST["padding"]; ?>px;
    } 
}

    </style>

<?php
    $Tim = array("naam" => "Tim", "leeftijd" => "18", "woonplaats" => "Amstelveen", "Klas" => "0D", "sport" => "Basketbal");
    function maakRij($argument1, $argument2){
        echo '<tr>
                    <td>'.$argument1.'</td>
                    <td>'.$argument2.'</td>
                </tr>';
    }
 
?>
<body>
    <table>
 
        <tr>
        <?php 
            foreach($Tim as $eigenschap => $waarde){
               maakRij($eigenschap, $waarde); 
            }
        ?>
        </tr>
    </table>
 
</body>