<?php //qsort
echo "ソートしたい個数を入力して下さい".PHP_EOL;
fscanf(STDIN, "%d", $cnt);

echo "数字を入力しEnterを押して下さい".PHP_EOL;
for ($i=0; $i < $cnt; $i++) { 
	fscanf(STDIN, "%d", $s);
	$nums[]=$s;
}

echo "昇順なら asc, 降順なら desc と入力して下さい".PHP_EOL;
fscanf(STDIN, "%s", $order);

echo "Lets sort >>> ".implode(",", $nums).PHP_EOL;
$right = count($nums)-1;

qsort($nums,0,$right,$order);

echo "Finish >>> ".implode(",", $nums).PHP_EOL;

function qsort (array &$nums,$left,$right,$order=asc) {
	if($left>=$right) return;
	$pivo = $nums[($left+$right)/2];
	$l=$left;
	$r=$right;
	$tmp=0;
	while($l<=$r){
		if($order=="asc"){
			while($nums[$l]<$pivo){
				$l++;
			}
			while($nums[$r]>$pivo){
				$r--;
			}
		}else{
			while($nums[$l]>$pivo){
				$l++;
			}
			while($nums[$r]<$pivo){
				$r--;
			}
		}
		if($l<=$r){
			$tmp=$nums[$l];
			$nums[$l]=$nums[$r];
			$nums[$r]=$tmp;
			$l++;
			$r--;
		}
		echo implode(",", $nums).PHP_EOL;
	}
	qsort($nums,$left,$r,$order);
	qsort($nums,$l,$right,$order);
}