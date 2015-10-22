<?php
$typhoon = trim(fgets(STDIN));
$typhoon = str_replace(array("\r\n","\r","\n"), '', $typhoon);
list($xc,$yc,$r1,$r2) = explode(" ", $typhoon);

$cnt_people = trim(fgets(STDIN));
for ( $i = 0; $i < $cnt_people; $i++) {
	// 人の座標
	$s = trim(fgets(STDIN));
	$s = str_replace(array("\r\n","\r","\n"), '', $s);
	list($x,$y) = explode(" ", $s);
	// 暴風域判定
	$pos = (pow(($x-$xc),2) + pow(($y-$yc),2));
	if (pow($r1,2) <= $pos && $pos <= pow($r2,2)) {
		$rslt[] = "yes".PHP_EOL;
	} else {
		$rslt[] = "no".PHP_EOL;
	}
}
foreach ($rslt as $key => $value) {
	echo $value;
}
?>
