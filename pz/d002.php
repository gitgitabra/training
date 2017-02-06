<?php
$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
$ary = explode(" ", $s);

if ($ary[0] == $ary[1]) {
	echo "eq".PHP_EOL;
} elseif ($ary[0] > $ary[1]) {
	echo $ary[0].PHP_EOL;
} else {
	echo $ary[1].PHP_EOL;
}
?>
