<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$resultat = "";

for ($i = 1; isset($str[$i]); $i++) {
    $resultat .= $str[$i]; 
}

$resultat .= $str[0]; 

echo $resultat;
