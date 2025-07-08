<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Choix de style</title>
</head>
<body>

  <h2>Choisissez un style</h2>

  <form method="GET" action="">
    <label for="style">Style :</label>
    <select name="style" id="style">
      <option value="style1">Style 1</option>
      <option value="style2">Style 2</option>
      <option value="style3">Style 3</option>
    </select>
    <br><br>
    <input type="submit" value="Valider">
  </form>

<?php
$styles_disponibles = ['style1', 'style2', 'style3'];
$style = (isset($_GET['style']) && in_array($_GET['style'], $styles_disponibles))
  ? $_GET['style']
  : 'style1';
?>

<link rel="stylesheet" href="<?= htmlspecialchars($style) ?>.css">
</body>
</html>
