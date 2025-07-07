<form method="POST" action="">
  <input type="text" name="nom" />
  <input type="submit" value="Envoyer" />
</form>

<?php
echo "Le nombre d'arguments POST est : " . count($_POST);
?>