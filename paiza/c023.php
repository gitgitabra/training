<?php
$correct_num = trim(fgets(STDIN));
$correct_num = str_replace(array("\r\n","\r","\n"), '', $correct_num);
$ary_correct_num = explode(" ", $correct_num);
$lines = trim(fgets(STDIN));
for ( $i = 0; $i < $lines; $i++) {
	$choice_num = trim(fgets(STDIN));
	$choice_num = str_replace(array("\r\n","\r","\n"), '', $choice_num);
	$ary_choice_nums[] = explode(" ", $choice_num);
}
foreach ($ary_choice_nums as $i => $nums) {
	$cnt[$i] = 0;
	foreach ($nums as $k => $v) {
		if (array_search($v, $ary_correct_num) !== false) {
			$cnt[$i]++;
		}
	}
}
foreach ($cnt as $k => $v) {
	echo $v.PHP_EOL;
}
?>
