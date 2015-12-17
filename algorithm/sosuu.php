<?php //素数を求める
//fscanf(STDIN, "%d", $n);
$ary=[];
while($line=fgets(STDIN))
{
	// if($line<=1){
	// 	echo "0".PHP_EOL;
	// } elseif ($line == 2) {
	// 	echo "1".PHP_EOL;
	// }

	//$ary=[];
	$i=0;
	$cnt=1;
	for ($i=3; $i <= $line; $i+=2) { 
		$isPrime=false;
		for ($j=3; $j <= sqrt($i); $j+=2) { 
			$mod = $i % $j;
			if($mod == 0) {
				$isPrime=false;
				break;
				//continue 2;
			}
			$isPrime=true;
		}
		if($isPrime) {
			$cnt++;
			$ary[]=$i;
		}
	}
	echo $cnt.PHP_EOL;
	//o($n,$ary);
}
function o ($n,$ary) {
	$s=implode(",", $ary);
	echo "{$n} に含まれる素数は[{$s}]です".PHP_EOL;
}