<?php
$input_lines = trim(fgets(STDIN));
for ( $i = 0; $i < $input_lines; $i++) {
	$s = trim(fgets(STDIN));
	$s = str_replace(array("\r\n","\r","\n"), '', $s);
	$s = strrev($s); //クレカ番号は右から順
	$posX = strpos($s, "X");
	$length = strlen($s);
	
	if(strlen($s)!==16) {echo "クレジット番号は16桁で入力して下さい。プログラムを終了します。".PHP_EOL;exit;}
	if($posX===false || $posX!==0) {echo "ERROR: Xを末尾に付与して下さい。プログラムを終了します。".PHP_EOL;exit;}
	
	$evens=[];
	$mods=[];

	for ($l=1; $l <= $length; $l++) { 
		if($l===1){
			$x = substr($s, 0, 1);
		} elseif($l % 2===0) {
			$evens[] = substr($s, $l-1, 1);
		} else {
			$mods[] = substr($s, $l-1, 1);
		}
	}

	$even=0;
	foreach ($evens as $k => $v) {
		$temp = $v*2;
		//2倍したあと2桁の数字になるものは、1の位と10の位の数を足して1桁の数字にしたあと、総和をとる
		if(strlen($temp)===2) {
			$temp = substr($temp,0,1) + substr($temp,1,1);
		}
		$even += $temp;
	}

	$mod=0;
	foreach ($mods as $k => $v) {
		$mod += $v;
	}

	$total = ($even+$mod);
	$oneth = substr(strrev($total),0,1);
	if($oneth == 0) {
		$diff=0;
	} else {
		$diff = 10-$oneth;
	}
	$ary_x[] = $diff;
}
foreach ($ary_x as $key => $value) {
	echo $value.PHP_EOL;
}
?>
