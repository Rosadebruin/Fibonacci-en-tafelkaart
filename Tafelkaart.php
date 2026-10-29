<?php

// Zorgt voor de stijl van de tabel
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; text-align: center; font-family: sans-serif;'>";

// Bovenste tabel rij waar de nummers 1 tot en met 9 staat
echo "<thead>";
echo "<tr style='background-color: #446688;'>";
echo "<th style='padding: 10px;'>Tafel van</th>";
for ($col = 1; $col <= 9; $col++) {
    echo "<th style='padding: 10px; min-width: 30px;'>" . $col . "</th>";
}
echo "</tr>";
echo "</thead>";

// Rijen van de tabel
echo "<tbody>";
// Dit zorgt voor de rijen van de tabel van nummer 1 tot en met 10. <= zorgt ervoor dat het niet hoger dan 10 kan gaan.
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    
    // Dit is de stijl van de rijen
    echo "<th style='background-color: rgb(164, 183, 202); padding: 10px;'>" . $row . "</th>";
    
    // Dit is de bovenste rij met de nummers 1 tot en met 9. >= zorgt ervoor dat het niet hoger kan gaan dan 9.
    for ($col = 1; $col <= 9; $col++) {
        // Dit is de berekening van de 2 rijen, rij van nummers 1/tm10 worden vermenigvuldigd door de rij van nummers 1/tm9.
        $product = $row * $col;
        echo "<td style='padding: 10px;'>" . $product . "</td>";
    }
    
    echo "</tr>";
}
echo "</tbody>";

echo "</table>";
?>