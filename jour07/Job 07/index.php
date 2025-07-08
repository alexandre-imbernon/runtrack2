<?php
function gras($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (ctype_upper($mot[0])) {
            $mot = "<b>$mot</b>";
        }
    }
    return implode(" ", $mots);
}

function cesar($str, $decalage = 2) {
    $resultat = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? 'A' : 'a';
            $resultat .= chr((ord($char) - ord($base) + $decalage) % 26 + ord($base));
        } else {
            $resultat .= $char;
        }
    }
    return $resultat;
}

function plateforme($str) {
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (str_ends_with($mot, "me")) {
            $mot .= "_";
        }
    }
    return implode(" ", $mots);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire magique</title>
</head>
<body>

<form method="POST" action="">
    <label for="str">Texte :</label>
    <input type="text" name="str" id="str" required><br><br>

    <label for="fonction">Transformation :</label>
    <select name="fonction" id="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select><br><br>

    <label for="decalage">Décalage (si César) :</label>
    <input type="number" name="decalage" id="decalage" value="2"><br><br>

    <button type="submit">Transformer</button>
</form>

<?php
if (!empty($_POST['str']) && !empty($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    $decalage = isset($_POST['decalage']) ? intval($_POST['decalage']) : 2;

    switch ($fonction) {
        case "gras":
            echo gras($str);
            break;
        case "cesar":
            echo cesar($str, $decalage);
            break;
        case "plateforme":
            echo plateforme($str);
            break;
        default:
            echo "Option inconnue.";
    }
}
?>

</body>
</html>
