<?php
$input_lines = trim(fgets(STDIN));
$str="";
for ( $i = 0; $i < $input_lines; $i++) {
	$s = trim(fgets(STDIN));
	$s = str_replace(array("\r\n","\r","\n"), '', $s);
	$str .= $s;
	if($i == ($input_lines-1)) {
		$str .= ".";
	} else {
		$str .= ",";
	}
}
echo "Hello ".$str.PHP_EOL;	
?>
