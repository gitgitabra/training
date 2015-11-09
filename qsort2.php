<?php
fscanf(STDIN, "%d", $cnt);
$nums=[];
for ($i=0; $i < $cnt; $i++) { 
	fscanf(STDIN, "%d", $nums[]);
}
//var_dump($nums);exit;
$end=count($nums)-1;
qsort($nums,0,$end);
echo implode(",", $nums).PHP_EOL;

function qsort(&$nums,$left,$right){
	if ($left>=$right) {
		return;
	}
	$l=$left;
	$r=$right;
	$p=$nums[($left+$right)/2]; //center pivot
	$tmp=0;
	while ($l<=$r) {
		while ($nums[$l] < $p) {
			$l++;
		}
		while ($nums[$r] > $p) {
			$r--;
		}
		if ($l<=$r) {
			// replace left num <=> right num
			$tmp=$nums[$l];
			$nums[$l]=$nums[$r];
			$nums[$r]=$tmp;
			$l++;
			$r--;
			echo implode(",", $nums).PHP_EOL;
		}
	}
	qsort($nums,$left,$r);
	qsort($nums,$l,$right);
}