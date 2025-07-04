<?php
$bool = true;
$int = 42;
$str = "Hello";
$float = 3.14;

$vars = [
  "bool" => $bool,
  "int" => $int,
  "str" => $str,
  "float" => $float
];

echo "<table border=1><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
foreach ($vars as $name => $val) {
  $type = gettype($val);
  $val = is_bool($val) ? ($val ? "true" : "false") : $val;
  echo "<tr><td>$type</td><td>$name</td><td>$val</td></tr>";
}
echo "</table>";
?>
