<?php
$s = trim(fgets(STDIN));
$s = str_replace(array("\r\n","\r","\n"), '', $s);
$parents = explode(" ", $s);

$input_lines = trim(fgets(STDIN));
for ( $i = 0; $i < $input_lines; $i++) {
	$child = trim(fgets(STDIN));
	$child = str_replace(array("\r\n","\r","\n"), '', $child);
	$childs = explode(" ", $child);
	if($parents[0] > $childs[0]) {
		echo "High".PHP_EOL;
	} else if ($parents[0] < $childs[0]) {
		echo "Low".PHP_EOL;
	} else {
		if($parents[1] < $childs[1]) {
			echo "High".PHP_EOL;
		} else {
			echo "Low".PHP_EOL;
		}
	}
}
?>
