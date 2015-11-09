<?php
/*
あなたはこれまでに出会った人たちの名刺を集めています。
名刺は、複数枚のファイルを閉じることができるバインダーに保存されています。

1枚のファイルには、n個のポケットが横に並んでいます。
1つのポケットには、2枚の名刺が背中合わせに入っており、１枚のファイルで表と裏の両面から名刺を眺めることができます。

各名刺には1から順に通し番号が付いているため、この番号の順に名刺を眺めることができるようにポケットに入っています。
1番からn番の名刺は、1枚目のファイルの表面から見たときに左詰めに並んでおり、
n+1番から2n番の名刺は、1枚目のファイルの裏面から見たときに左詰めに並んでいます。
2枚目以降のファイルにも同様に名刺が並んでいます。

namecard.png
上の図はn=3のときのバインダーの様子を表しています。
各ポケットの数字はそのポケットで眺めることができる名刺の番号で、
括弧で表される数字はそのポケットを反対の面から見たときに眺めることができる名刺の番号です。

名刺の番号mが与えられるので、その名刺の裏側の名刺の番号を表示するプログラムを作成してください。
ただし、番号mの名刺の裏面には必ず名刺が存在するものとしてください。

入力される値
バインダーのポケットの数nと名刺の番号mが半角スペース区切りで入力されます
n(バインダーのポケットの数) m(名刺の番号) 
値は文字列で標準入力から渡されます。標準入力からの値取得方法はこちらをご確認ください

期待する出力
m番の名刺の裏側の番号を出力してください。

最後は改行し、余計な文字、空行を含んではいけません。
入力例1
3 1
出力例1
6
*/

fscanf(STDIN, "%d %d", $n, $m);
//$page = floor($m / $n)+1;
$pokets=$n*2; // 表裏合わせたポケット数
$page=floor(($m-1)/$pokets);
echo $page.PHP_EOL;
echo (((2 * $page + 1) * $pokets + 1) - $m).PHP_EOL;
// $pos = $m % $n;
// if($pos == 0) { //右端のカード
// 	$page--;
// 	$pos=$n;
// }
// echo "page:".$page.PHP_EOL;
// echo "pos:".$pos.PHP_EOL;
// $sum = 2*$n+1;
// $a = $sum*ceil($page/2);
// echo "sum:".$sum.PHP_EOL;
// echo "a:".$a.PHP_EOL;
// //$b = $m % $n - 1;
// if($page%2 == 0) {
// 	// m が 裏
	
// }else{
// 	// m が 表
// 	echo ($m+($n*-1)).PHP_EOL;
// } 
?>