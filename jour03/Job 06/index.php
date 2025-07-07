<?php

$str = "Les choses que l'on possède finissent par nous posséder.";
$resultat = "";

for ($i = mb_strlen($str) - 1; $i >= 0; $i--) {
    $resultat .= mb_substr($str, $i, 1);
}

echo $resultat;