<?php
$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
$s = explode(" ", $s);

$sale1 = $s[0] * ($s[1]/100);
$mod1 = $s[0] - $sale1;
$sale2 = $mod1 * ($s[2]/100);
$last_mod = $s[0] - ($sale1 + $sale2);

echo $last_mod.PHP_EOL;
?>
