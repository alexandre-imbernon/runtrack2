<?php

function bonjour($jour) {
    if ($jour === true) {
        return 'Bonjour<br>';
    } else {
        return 'Bonsoir';
    }
}

echo bonjour(true);   
echo bonjour(false);  
?>
