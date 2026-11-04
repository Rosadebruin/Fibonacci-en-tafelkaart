<?php
// Sets a max to the amount
$max = isset($_GET['max']) ? (int)$_GET['max'] : 10;

// Sets a max to the tabel's size
if ($max > 50) {
    $max = 50;
}

// This lets the user choose the number of the table
echo "<form method='GET'action=''>";
echo "<label for='max'>Voer een getal in: </label>";
echo "<input type='number' id='max' name='max' values'" . $max . "' min='1' max='50' required";
echo "<input type='submit' value='Berekenen'>";
echo "</form>";


// This gives the table a style and how many cells there are
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; text-align: center; font-family: sans-serif;'>";

// Top row of the table where the numbers are
echo "<thead>";
echo "<tr style='background-color: #446688;'>";
echo "<th style='padding: 10px;'>Tafel van</th>";
for ($col = 1; $col <= $max; $col++) {
    echo "<th style='padding: 10px; min-width: 30px;'>" . $col . "</th>";
}
echo "</tr>";
echo "</thead>";

// The rows of the table
echo "<tbody>";
// The rows of the table from up to down, makes sure it doesn't go higher than 10
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    
    // Style of the background of the table
    echo "<th style='background-color: rgb(164, 183, 202); padding: 10px;'>" . $row . "</th>";
    
    // The top row from left to right with the number that has been filed in.
    for ($col = 1; $col <= $max; $col++) {
        // The calculation of the 2 rows with the filled number and 10.
        $product = $row * $col;
        echo "<td style='padding: 10px;'>" . $product . "</td>";
    }
    
    echo "</tr>";
}
echo "</tbody>";

echo "</table>";
?>