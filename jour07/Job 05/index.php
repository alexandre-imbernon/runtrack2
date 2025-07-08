<?php
function occurrences($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    return "Le nombre d'occurrences du caractère \"$char\" dans \"$str\" est de $count";
}

echo occurrences("Anticonstitutionnellement", "e");  // Affiche : Le nombre d'occurrences du caractère "o" dans "Test" est de 0

?>