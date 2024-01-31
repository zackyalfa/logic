<?php
function formatnumber($number){
    if($number < 1000) {
        return $number;
    } elseif($number < 1000000) {
        // Untuk ribuan
        $formattedNumber = number_format($number / 1000, 1) . 'K';
        return $formattedNumber;
    } else {
        // Untuk jutaan
        $formattedNumber = number_format($number / 1000000, 1) . 'M';
        return $formattedNumber;
    }
}

echo formatnumber(9500); 
echo "<br>";
echo formatnumber(1700000); 
?>