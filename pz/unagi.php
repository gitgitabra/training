<?php
// 座席数 客組数
fscanf(STDIN, "%d %d", $table, $group);
// 席番号を付与
$seat=[];
foreach (range(1,$table) as $key => $value) {
	$seat[$value]=0;
}
// 組数分ループ
for ($cnt=0; $cnt<$group; $cnt++) {
	// 人数 始点番号
	fscanf(STDIN, "%d %d", $nop, $index);
	// 仮着席状況(誰も座らずに怒って変えるため)
	$temp_seat=[];
	// 人数分ループ
	for ($i=$index; $nop>0; $i++) {
		// 最後の席番号を超えたら1番から
		if ($i>$table) {
			$i = 1;
		}
		// 誰も座ってないか？
		if ($seat[$i]===0) {
			//仮着席
			$temp_seat[$i] = 1;
		} else {
			//誰か座ってたら次のグループへ
			$temp_seat=[];
			break;
		}
		$nop--;
	}
	// 全員座れそうなら本着席
	$seat = array_replace($seat, $temp_seat);
}
// 着席できた人数を出力
echo array_count_values($seat)[1].PHP_EOL;
?>
