<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire Nombre</title>
</head>
<body>

  <h2>Entrez un nombre</h2>

  <form method="GET" action="">
    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre" id="nombre" required>
    <input type="submit" value="Envoyer">
  </form>

  <?php
  if (!empty($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    if (is_numeric($nombre)) {
      if ($nombre % 2 == 0) {
        echo "<p><strong>$nombre est un nombre pair</strong></p>";
      } else {
        echo "<p><strong>$nombre est un nombre impair</strong></p>";
      }
    } else {
      echo "<p><strong>Veuillez entrer un nombre valide.</strong></p>";
    }
  }
  ?>

</body>
</html>
