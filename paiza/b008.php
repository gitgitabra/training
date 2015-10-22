<?php
/*
B008:地下アイドルの夢
「0だった。今年の利益は0。去年も0。その前も、さらにその前も、ずっとずっと0。来年こそは必ず……」 
そう語るあなたの友人の地下アイドルをプロデュースすることになりました。 

彼女のファンクラブには会員がN人います。彼女はファンクラブ会員限定のライブイベントを行いますが、 
ライブごとにある一定の開催費用がお客一人当たりにかかります。彼女のファンクラブ会員はとても結束力が強く、 
どんなライブも開催すれば全員が必ず参加していました。そこで全員から一人当たりの費用以上の入場料を徴収すれば赤字にはなりませんが、 
以前それを実行したところファンクラブ会員が激減してしまったため、現在は無料でライブを開催し、 
グッズを売ることで売上を得る戦略をとっています。 
来年は全部でM回のライブイベントを開催予定です。 

ただし、すべてのライブを適当に開催すると赤字だらけになる可能性があるので、開催するライブを適切に選択する必要があります。 
それぞれのライブごとに各ファンクラブ会員がもたらす損益の情報が存在します。損益とは過去の統計情報から得た、 
そのイベントにおいて各会員に対し予測されるグッズの購入額から、会員一人当たりのライブ開催費用を引いたものです。 
ある会員があまりグッズを買わないと予測されると、この値は負になることがあります。 
これはその会員が損失をもたらすことを意味しています。

例えば会員数[ N = 3 ], イベント回数[ M = 5 ] で、ライブイベントの情報が以下のとおりだったとしましょう。 
ライブ1 は会員1が3円の利益をもたらし、会員3 が2円の損失をもたらすことを表しています。その他も同様です。

この場合、開催したライブと、来年の彼女の損益の例を以下にいくつか示します。
また彼女が得る損益が負である場合は、その数の大きさと同じ数だけの損失が出るものとします。
上記の表に記載の通り、もし彼女がライブ3, 4を開催した場合、彼女は来年3円の赤字になります。

さて、ファンクラブの会員数N、ライブイベントの数M、ライブごとの利益情報が与えられるので、
あなたの友人のために、適切にライブを開催した場合に得られる来年の利益の最大値を求めてください。

ただし、N とM はそれぞれ値として0をとる可能性があることに注意してください。
また、ライブをどのように開催しても得られる最大損益が負である場合、すなわち、必ず赤字になってしまう場合、
それなら何もしないほうが良いということでライブイベントを実施しない、つまり損益0という処理にしてください。
*/
$input_lines = trim(fgets(STDIN));
for ( $i = 0; $i < $input_lines; $i++) {
	$s = trim(fgets(STDIN));
	$s = str_replace(array("\r\n","\r","\n"), '', $s);
	$s = explode(",", $s);
	echo "hello = ".$s[0]." , world = ".$s[1]."\n";
}
?>
