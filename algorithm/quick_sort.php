<?php // quick sort
echo "ソートしたい値は何個ですか？ >>> ";
fscanf(STDIN, "%d", $n);
echo "ソートしたい値を1つずつ入力してください >>> ".PHP_EOL;
for ($i=0; $i < $n; $i++) { 
	fscanf(STDIN, "%d", $s);
	$ary[]=$s;
}
echo "並べ替えます >>> ".implode(",", $ary).PHP_EOL;
$end=count($ary)-1;
qsort($ary,0,$end);
echo "並べ替え完了 >>> ".implode(",", $ary).PHP_EOL;

function qsort (array &$ary, $left, $right) {
	if ($left >= $right) {
		return;
	}
	$pivot = $ary[($left+$right)/2]; //基準点
	$l = $left;
	$r = $right;
	$temp = null; //入れ替え用
	while ($l <= $r) {
		while ($ary[$l] < $pivot) {
			$l++;
		}
		while ($ary[$r] > $pivot) {
			$r--;
		}
		if ($l <= $r) {
			// 入れ替え処理(left <=> right)
			$temp = $ary[$l];
			$ary[$l] = $ary[$r];
			$ary[$r] = $temp;
			$l++;
			$r--;
		}
	}
	echo implode(",", $ary).PHP_EOL;
	qsort($ary,$left,$r);
	qsort($ary,$l,$right);
}