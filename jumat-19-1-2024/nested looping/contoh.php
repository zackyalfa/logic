<?php
//buatlah urutan 1x1=1 sampe 3x10-30
for ($i=1; $i <= 3; $i++) { 
    for ($x=1; $x <= 10; $x++) { 
        echo "$i x $x = ".$i * $x. "|";
    }
    echo "<br>";
}