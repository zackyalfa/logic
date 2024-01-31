<?php

$a = -5;

// Cek apakah variabel $a merupakan bilangan bulat positif, negatif, atau cacah
if ($a > 0) {
    echo "$a adalah bilangan bulat positif.";
} elseif ($a < 0) {
    echo "$a adalah bilangan bulat negatif.";
} else {
    echo "$a adalah bilangan cacah.";
}

echo "<br>";

// Cek apakah variabel $a merupakan kelipatan 3
if ($a % 3 == 0) {
    echo "$a adalah kelipatan 3.";
} else {
    echo "$a bukan kelipatan 3.";
}

?>