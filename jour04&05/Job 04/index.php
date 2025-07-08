<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire POST + Affichage</title>
</head>
<body>

  <h2>Formulaire d'envoi POST</h2>

  <form method="POST" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"><br><br>

    <input type="submit" value="Envoyer">
  </form>

  <h2>Arguments reçus</h2>

  <?php if (!empty($_POST)): ?>
    <table border="1" cellpadding="5" cellspacing="0">
      <thead>
        <tr>
          <th>Argument</th>
          <th>Valeur</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($_POST as $cle => $valeur): ?>
          <tr>
            <td><?= htmlspecialchars($cle) ?></td>  
            <td><?= htmlspecialchars($valeur) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>Aucun argument POST reçu pour l’instant.</p>
  <?php endif; ?>

</body>
</html>
