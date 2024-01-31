<?php
//buatlah sebuah fungsi yang akan mengubah sebuah number menjadi format "K"muntuk ribuan dan "M" untuk jutaan.misal 9500 menjadi 9,5K atau 1.700.000 menjadi 1,7M
function formatnumber($number){
    if($number < 1000) {
        return $number;
    } elseif($number < 1000000) {
        //Fungsi sprintf() menulis string yang diformat ke variabel.
        //Ganti tanda persen (%) dengan variabel yang dimasukkan sebagai argumen:
        return sprintf('%0.1fK', $number / 1000);
    } else {
        return sprintf('%0.1fM', $number / 1000000);
    }
}

echo formatnumber(9500);  
echo "<br>";
echo formatnumber(1700000);  
?>
