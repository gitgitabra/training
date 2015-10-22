<?php //素数を求める
//fscanf(STDIN, "%d", $n);

while($line=fgets(STDIN))
{

	if($line<=1){
		echo "{$n} は素数を含みません".PHP_EOL;exit;
	}

	$ary=[];
	$i=0;
	$cnt=0;
	for ($i=2; $i < $line; $i++) { 
		for ($j=2; $j < $i; $j++) { 
			$mod = $i % $j;
			if($mod == 0) {
				continue 2;
			}
		}
		$cnt++;
		$ary[]=$i;
	}
	echo $cnt.PHP_EOL;
	//o($n,$ary);
}
function o ($n,$ary) {
	$s=implode(",", $ary);
	echo "{$n} に含まれる素数は[{$s}]です".PHP_EOL;
}