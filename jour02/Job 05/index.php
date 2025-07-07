<?php

function estPremier($n) {
    if ($n <= 1) return false;
    if ($n === 2) return true;

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i <= 1000; $i++) {
    if (estPremier($i)) {
        echo "$i<br />";
    }
}
?>
