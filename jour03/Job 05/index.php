<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
$dic = ["consonnes" => 0, "voyelles" => 0];
$voyelles = ["a", "e", "i", "o", "u", "y"];


for ($i = 0; isset($str[$i]); $i++) {
    $char = strtolower($str[$i]); 

    if (ctype_alpha($char)) {
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        
    }
    }
}
?>
<table border="1" cellpadding="5" cellspacing="0">
  <thead>
    <tr>
      <th>Voyelles</th>
      <th>Consonnes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $dic["voyelles"] ?></td>
      <td><?= $dic["consonnes"] ?></td>
    </tr>
  </tbody>
</table>

