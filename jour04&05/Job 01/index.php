<form method="GET" action="">
  <input type="text" name="nom" />
  <input type="submit" value="Envoyer" />
</form>

<?php
echo "Le nombre d'arguments GET est : " . count($_GET);
?>