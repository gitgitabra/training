<?php
// A,B,Cの3人が1〜5の5枚のカードを使ってインディアンポーカーをします。
// 3人は、ランダムに1枚のカードを引いて額にかざします。 相手のカードは見えますが、自分のカードは見えません。
// この状態で、A->B->Cの順番に、自分が1番大きい(MAX)、自分は2番目に大きい(MID)自分が1番小さい(MIN)、わからない(?)、を答えます。
// 一人でも答えがわかった場合、そこで終了となります。｢わからない｣と答えた場合、回答権が次の人に移ります。 
// Cもわからない場合、再度Aに回答権が移ります。3人ともウソを言ったり、適当に答えてはいけません。

// 例1) ｢A=1 B=4 C=5｣だった場合、｢A => MIN｣で終了します。 
// 例2) ｢A=1 B=2 C=4｣だった場合、｢A => ?, B => MID｣で終了します。 
// Bは｢Aがわからないなら、自分は5ではない｣と考えるからです。

// 以上を踏まえて、
// 引数で｢A=1 B=4 C=5｣で実行すると｢A =>MIN｣を出力 
// 引数で｢A=1 B=2 C=4｣で実行すると｢A =>?, B =>MID｣
// を出力するようなコマンドラインのプログラムを作成してください。
// なお、人数やカードの枚数がパラメーター化されていて、さまざまなケースがシミュレーションできるコードが望ましいです。


// echo "何人で遊ぶか数値で入力して下さい".PHP_EOL;
// $cnt_player = trim(fgets(STDIN));

// echo "カードは1からいくつまでの数字で遊ぶか数値で入力して下さい".PHP_EOL;
//$max_num = trim(fgets(STDIN));


echo "[名前=カードの数字]の形式で｢A=1 B=4 C=5｣のようにスペース区切りで複数人入力して下さい".PHP_EOL;

$input_lines = trim(fgets(STDIN));
$ary_ans = explode(" ", $input_lines);
$cnt_player = count($ary_ans);

for ( $i = 0; $i < $cnt_player; $i++) {
	$v = str_replace(array("\r\n","\r","\n"), '', $ary_ans[$i]);
	list($players[$i],$vals[$i]) = explode("=", $v);
	$explode = explode("=", $v);
	$player_answer[$explode[0]] = (int)$explode[1];
}

$indian =& new indian($players,$vals);

$max_card = max($player_answer);
$min_card = min($player_answer);
$diff = ($cnt_player-1);

class indian
{
	var $_players;
	var $_cards;
	var $players_eye=[];

	public function __construct($players, $cards){
		$this->_players = $players;
		$this->_cards = $cards;
	}
	
	function sortCardAsc() {
		sort($this->_cards);
	}
	
	function sortCardDesc() {
		rsort($this->_cards);
	}

	function getCardRange($min,$max) {
		$numbers=[];
		foreach (range($min,$max) as $key => $value) {
			$numbers[] = $value;
		}
		return $numbers;
	}
}

// for ( $i = 0; $i < $ary_ans; $i++) {
// 	$s = trim(fgets(STDIN));
// 	$s = str_replace(array("\r\n","\r","\n"), '', $s);
// 	$s = explode(",", $s);
// 	echo "hello = ".$s[0]." , world = ".$s[1]."\n";
// }
?>
