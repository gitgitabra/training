<?php
// はいあんどろー
// 1~13のカードが配られるはず

$input_lines = trim(fgets(STDIN));
// for ( $i = 0; $i < $input_lines; $i++) {
// 	$s = trim(fgets(STDIN));
// 	$s = str_replace(array("\r\n","\r","\n"), '', $s);
// 	$s = explode(",", $s);
// 	echo "hello = ".$s[0]." , world = ".$s[1]."\n";
// }

$highlow =& new highlow($input_lines);
//var_dump($highlow);exit;
$highlow->main();
exit;

class highlow
{
	public $min;
	public $max;
	public $diff;
	public $center;
	public $num;
	public $input_num;

	public function __construct($input_num) {
		foreach (range(1,13) as $key => $value) {
			$this->num[] = $value;
		}
		$this->min = min($this->num);
		$this->max = max($this->num);
		$this->diff = $this->max - $this->min;
		$this->center = ceil($this->diff / 2);
		$this->input_num = $input_num;
	}

	public function main () {
		echo "今回のカードは".$this->min."〜".$this->max."です。".PHP_EOL;
		echo "お題は".$this->input_num.PHP_EOL;
		$decide = $this->decide($this->input_num);
		$dealer = $this->dealer($this->min,$this->max);
		$this->judge($this->input_num, $decide, $dealer);
	}

	// 思考ルーチン
	private function decide ($input_num) {
		$diff_min = $this->input_num - $this->min;
		if ($diff_min < $this->center) {
			// 半分より小さかったら　HIGH
			$decide = 1;
			echo "PC思考　HIGH".PHP_EOL;
		} else {// ($diff_min > $this->center) {
			// 半分より大きかったら　LOW
			$decide = 0;
			echo "PC思考　LOW".PHP_EOL;
		} 
		return $decide;
	}

	// カード選出
	private function dealer ($min,$max) {
		$card = mt_rand($min,$max);
		unset($this->num[$card-1]);
		return $card;
	}

	// 判定
	private function judge ($input_num, $decide, $card) {
		if($card > $input_num) {
			echo "結果は{$card} HIGHでした。".PHP_EOL;
			if($decide) {
				echo "お見事！".PHP_EOL;
			} else {
				echo "残念...".PHP_EOL;
			}
		} elseif ($card < $input_num) {
			echo "結果は{$card} LOWでした。".PHP_EOL;
			if(!$decide) {
				echo "お見事！".PHP_EOL;
			} else {
				echo "残念...".PHP_EOL;
			}
		}
	}
}
?>
