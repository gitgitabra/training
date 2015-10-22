<?php
$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
if ($s % 2) {
	echo "odd".PHP_EOL;
} else {
	echo "even".PHP_EOL;
}
?>
