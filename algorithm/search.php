<?php //bsearch
$s = fgets(STDIN);
$s = trim($s);
$list = explode(" ", $s);
fscanf(STDIN, "%d", $val);
// var_dump($list);exit;
echo bsearch($list,$val).PHP_EOL;

function bsearch (array $list,$val) {
	$length = count($list);
	if($length == 0) {
		return false;
	}
	$left = 0;
	$right = $length;
	while($left < $right) {
		//$mid = (int)$list[($left + $right) / 2];
		$mid = floor(($left+$right)/2);
		if ($list[$mid] == $val) {
			return $mid;
		}
		if ( $val < $list[$mid] ) {
			$right = $mid;
		} else {
			$left = $mid;
		}
		echo $mid.PHP_EOL;
	}
	return false;
}
switch (variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}