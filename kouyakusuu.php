<?php //最大公約数　ユークリッド互除法
fscanf(STDIN, "%d %d", $a, $b);
if($a > $b) {
	$big=$a;
	$small=$b;
} elseif($a < $b) {
	$big=$b;
	$small=$a;
} elseif($a==0 || $b==0) {
	echo "最大公約数は 0 です".PHP_EOL;exit;
} else {
	echo "最大公約数は 0 です".PHP_EOL;exit;
}

divisor($big,$small);

function divisor ($b,$s) {
	$d = $b - $s;
	if($d==$s) {
		echo "最大公約数は ".$d." です".PHP_EOL;exit;
	}
	if($d<=0){
		echo "最大公約数は 0 です".PHP_EOL;exit;
	}
	if($d > $s) {
		divisor($d,$s);
	} else {
		divisor($s,$d);	
	}
}