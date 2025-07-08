<?php
function leetSpeak($str) {
    $mapping = [
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'S' => '5',
        'T' => '7',
    ];

    $result = '';

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $upperChar = strtoupper($char);
        if (isset($mapping[$upperChar])) {
            $result .= $mapping[$upperChar];
        } else {
            $result .= $char;  
        }
    }

    return $result;
}

echo leetSpeak("Je teste ma phrase");
?>