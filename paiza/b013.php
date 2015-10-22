<?php //最遅出社時刻
define("LIMIT_H", 8);
define("LIMIT_M", 59);
fscanf(STDIN, "%d %d %d", $a, $b, $c);
$N = trim(fgets(STDIN));
$trains=[];
for ( $i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d %d", $hour, $min);
	$trains[] = ["h"=>$hour, "m"=>$min];
}
$diff=null;
foreach ($trains as $k => $ary) {
	// b+cの時点で遅刻ではないか先に確認
	$h = $ary["h"];
	$m = $ary["m"];
	$b_to_c = $b + $c;
	if($b_to_c >= 60) {
		$h += floor($b_to_c / 60);
		$m += $b_to_c % 60;
	} else {
		$m += $b_to_c;
	}
	if(LIMIT_H >= $h && LIMIT_M >= $m) {
		$h_ = $ary["h"];
		$m_ = $ary["m"];
		if($ary["m"] - $a < 0) {
			$h_ = $ary["h"] - 1;
			$m_ = 60-($ary["m"]-$a)*(-1);
		} else {
			$h_ = $ary["h"];
			$m_ = $ary["m"]-$a;
		}
		$m_ = sprintf("%02d", $m_);
		$diff[]=$h_.".".$m_;
	}
}
$max = max($diff);
list($out_h,$out_m) = explode(".", $max);
$out_h = sprintf("%02d",$out_h);
$out_m = sprintf("%02d",$out_m);
echo $out_h.":".$out_m.PHP_EOL;
?>
