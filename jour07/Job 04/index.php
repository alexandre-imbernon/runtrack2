<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) { // Pas de division par 0
                return "Erreur : division par zéro";
            }
            return $a / $b;
        default:
            return "Opération inconnue";
    }
}

echo calcule(3,"*",7);
?>