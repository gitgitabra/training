<?php
/*
n本の縦線から成るあみだくじがあります。
このあみだくじにはm本の横線が引いてあります。
i番目の横線は、左からa_i番目の縦線の上からb_i[cm]の箇所と、
その1つ右の縦線の上からc_i[cm]の箇所をつないでいます。
縦線の長さは全てL[cm]です。

あなたは、あみだくじを行った後最終的に一番左に到達する縦線を選びたいと思っています。
どの縦線を選択すればよいのかを出力して下さい。

入力される値
1行目では縦線の長さL、縦線の本数n、横線の本数mがこの順で半角スペース区切りで与えられます。
2行目からm+1行目までのi+1行目では、a_i、b_i、c_iがこの順で半角スペース区切りで与えられます。
入力される値は全て整数です。入力最終行は改行コードは入りません。
文字列は標準入力から渡されます。標準入力からの値取得方法はこちらをご確認ください

期待する出力
最終的に一番左に到達する縦線が左から数えて何番目なのかを、一行で出力してください。

条件
5つのテストケースにおいて、以下の条件を満たします。
2≦L≦100
2≦n≦100

全てのテストケースにおいて、以下の条件を満たします。
2≦L≦10,000
2≦n≦1,000
0≦m≦10,000
1≦a_i≦n-1
1≦b_i, c_i≦L-1
2つ以上の横線が交差する、または端点を共有することはない。

入力例1
※ # 以降はコメントです。

7 4 5 # L(縦線の長さ)=7、n(縦線の本数)=4、m(横線の本数)=5
1 3 1 # 1番目の横線　1番目の縦線の上から3cmの位置から、2番目の縦線の上から1cmの位置に線が引かれる
3 2 2 # 2番目の横線　3番目の縦線の上から2cmの位置から、4番目の縦線の上から2cmの位置に線が引かれる
2 3 5 # 3番目の横線　2番目の縦線の上から3cmの位置から、3番目の縦線の上から5cmの位置に線が引かれる
3 4 4 # 4番目の横線　3番目の縦線の上から4cmの位置から、4番目の縦線の上から4cmの位置に線が引かれる
1 6 6 # 5番目の横線　1番目の縦線の上から6cmの位置から、2番目の縦線の上から6cmの位置に線が引かれる

[ ][1][ ][ ]
[ ][ ][2][2]
[1][3][ ][ ]
[ ][ ][4][4]
[ ][ ][3][ ]
[5][5][ ][ ]
 G

*/
$start=microtime();
fscanf(STDIN, "%d %d %d", $L, $col, $m);
$row=$L-1;

// マッピング用の配列
$map=[];
foreach (range(1,$row) as $r) {
	foreach (range(1,$col) as $c) {
		$map[$r][$c] = 0;
	}
}

// 横線の位置をmapに入れてく
for ( $i = 1; $i <= $m; $i++) {
	fscanf(STDIN, "%d %d %d", $a, $b, $c);
	$map[$b][$a]=$i;
	$map[$c][$a+1]=$i;
}

// 左下から上へ向かって探索
$pos = amida($row,$col,$map);
function amida($row,$col,$map,$pos=1,$mem=0,$current=1) {
	//echo "{$row},{$col},{$pos},{$mem}".PHP_EOL;
	for($r = $row; $r > 0; $r--){
		for ($c=$current; $c <= $col; $c++) {
			// 頭上に線があれば線番を保持
			if ($mem == 0 && $c==$pos && $map[$r][$c] != 0) {
				$mem = $map[$r][$c];
				$pos = amida($row,$col,$map,$pos,$mem,$current++);
			} elseif ($mem != 0 && $map[$r][$c] == $mem) {// 次の同じ線番がある場所
				$pos=$c;
				$mem=0;
			}
		}
		$current=1;
	}
	//echo "Row:{$r},Pos:{$pos}".PHP_EOL;
	if($r == 0) {
		return $pos;
	}
	//amida($row,$col,$map,$pos,$mem);
}
$end=microtime();
echo $pos.PHP_EOL;
//echo "TIME:".($end-$start).PHP_EOL;
?>
