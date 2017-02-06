<?php
fscanf(STDIN, "%d %d", $col, $row);
for($r = 0; $r < $row; $r++){
    for($c = 0; $c < 2 * $col - 1; $c++){
        $amida[$r][$c] = fgetc(STDIN);
    }
    fgetc(STDIN); // 改行捨てる
}
$target = fgets(STDIN);
$pos = strpos($target, 'o');
// ゴールから逆算する 複数正解がある場合は左側優先とする
for($r = $row - 1; $r >= 0; $r--){
    if($pos - 2 >= 0 && $amida[$r][$pos - 1] == '-'){
        $pos -= 2;
    }elseif($pos + 2 < count($amida[$r]) && $amida[$r][$pos + 1] == '-'){
        $pos += 2;
    }
}

//echo $pos.PHP_EOL;
$pos /= 2;
$pos++;
echo $pos.PHP_EOL;
?>