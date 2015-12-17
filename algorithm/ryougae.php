<?php //両替クイズ
/*
この機械では、10円玉、50円玉、100円玉、500円玉の組み合わせに両替することができ、
いずれの硬貨も充分な枚数がセットされています（現金での運賃は10円単位になっているため、1、5円玉は取り扱っていません）。

両替する際に、使われない硬貨があっても構いませんが、バスの中でたくさん小銭が出ると困るため、最大15枚になるように両替します。
例えば1000円を両替するときに、「10円玉を100枚」という両替はできません。

上記の条件において、1000円札を入れたときに出てくる硬貨の組み合わせは何通りあるかを求めてください。
なお、硬貨の順番は区別しないものとします。
*/

echo "お金を整数で入れて下さい（十の位未満の値は0で入力して下さい）>>> ";
fscanf(STDIN, "%d", $in_momey);

echo "最大両替枚数を入力して下さい >>> ";
fscanf(STDIN, "%d", $max_coins);

$coins = [500,100,50,10];
$comb=[];
$cnt=0;

function exchange1($target,$coins,&$cnt,$usable,&$comb) {
	// $d = "[".implode(":", $coins)."]";
	// echo "exchange({$target},{$d},{$cnt},{$usable})".PHP_EOL;
	$coin = array_shift($coins);
	$work = $coins;
	if (empty($work)) {
		if($target / $coin <= $usable) {
			$cnt += 1;
		}
	} else {
		$diff = floor($target/$coin);
		//echo "diff:{$diff}".PHP_EOL;
		for ($i=0; $i <= $diff; $i++) { 
			exchange($target-$coin*$i, $work, $cnt, $usable-$i,$comb);
		}
	}
}

function exchange2 ($target,$coins,$usable,&$comb) {
	$elm=[];
	if($usable > 0) {
		$c=count($coins);
		for ($i=0; $i < $c; $i++) { 
			$temp = $coins;
			$elm = array_shift($temp);
			exchange2($target,$temp,$usable-1,$);
		}
	} else {
		array_push($comb, $elm);
	}
}

exchange2($in_momey,$coins,$max_coins,$comb);
//exchange1($in_momey,$coins,$cnt,$max_coins,$comb);
var_dump($comb);
//echo $cnt.PHP_EOL;