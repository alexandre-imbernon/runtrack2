<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = ["a", "e", "i", "o", "u", "y"];
$resultat = "";

for ($i = 0; $i < strlen($str); $i += 1) {
    $char = strtolower($str[$i]);
    if (in_array($char, $voyelles)) {
        $resultat .= $str[$i];
    }

}

echo $resultat;
?>