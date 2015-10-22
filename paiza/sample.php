<?php
$input_lines = trim(fgets(STDIN));
for ( $i = 0; $i < $input_lines; $i++) {
	$year = trim(fgets(STDIN));
	$rslt = false;
	
	if (0 == $year % 4){ //西暦が4で割り切れる年は閏年。
		$rslt = true;
		if (0 == $year % 100){ //ただし、100で割り切れる年は閏年ではない。
			$rslt = false;
			if (0 == $year % 400){ //ただし、400で割り切れる年は閏年。
				$rslt = true;
			}
		}
	}

	//標準出力（stdout）で、入力された行数分の判定結果を出力します。
	//うるう年だった場合[N is a leap year]
	//うるう年でない場合[N is not a leap year]　と、出力。
	if($rslt) {
		echo "{$year} is a leap year".PHP_EOL;
	} else {
		echo "{$year} is not a leap year".PHP_EOL;
	}
}
?>