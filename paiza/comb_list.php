<?php // combination list 組み合わせの全リストを出力
echo "組み合わせ数 nCr を求めます。".PHP_EOL;
echo "全体数:n, 1グループあたりの数:r, 半角スペース区切りで入力して下さい 例:[5 3] >>> ";
fscanf(STDIN,"%d %d", $n, $r);
echo "組み合わせ数:".combi($n,$r).PHP_EOL;
function combi ($n,$r) {
	return _combi($n,$r) / fuct($r);
}
function _combi ($n,$r) { // nCrのnの部分を求める: n * (n-1) * (n-2) ... * r
	if($n==$r) return $r;
	return $n * fuct($n-1);
}
function fuct ($n) { // nCrのrの部分を求める(よーするに階乗)
	if($n==0) return 1;
	return $n * fuct($n-1);
}