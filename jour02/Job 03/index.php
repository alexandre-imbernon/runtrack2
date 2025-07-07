<?php
$specials1 = range(0, 20);   
$specials2 = range(25, 50); 
$special42 = 42;              

for ($i = 0; $i <= 100; $i++) {
    if ($i === $special42) {
        echo "LaPlateforme<br>";
    } elseif (in_array($i, $specials1, true)) {
        echo "<i>$i</i><br />";
    } elseif (in_array($i, $specials2, true)) {
        echo "<u>$i</u><br />";
    } else {
        echo "$i<br />";
    }
}
?>
