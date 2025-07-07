<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion Rambo</title>
</head>
<body>

  <h2>Connexion</h2>

  <form method="POST" action="">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="Se connecter">
  </form>

  <?php
  if (!empty($_POST)) {
    $val1 = "John";
    $val2 = "Rambo";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $val1 && $password === $val2) {
      echo "<p><strong>C’est pas ma guerre</strong></p>";
    } else {
      echo "<p><strong>Votre pire cauchemar</strong></p>";
    }
  }
  ?>

</body>
</html>
