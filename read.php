<?php
/*
ここが最終画面」、1⃣ｐhpでフォルダを探してテキストファイルからｒを開く
2⃣ｔｄは表の項目名 3⃣whileはファイルをループさせている？4⃣ explodeはテキストを，で区切り
０，１，２＝名前，メール，好きな漫画に分割している
5⃣一番したのところでecho（これは文字を呼び出す意味？）から３つに分割したテキスト（名前・メール・好きな漫画）を
tableに入れ込む感じのおまじない
*/
?>
<?php
$fileName = "data/data.txt";
$file = fopen($fileName,"r");
?>
<table border="2">
<tr>
<td>名前</td>
<td>メールドレス</td>
<td>好きな漫画</td>
</tr>
<?
while(!feof($file)){
$txt = fgets($file);
$str = explode(",", $txt);
?>
<tr>
<td><? echo $str[0]; ?></td>
<td><? echo $str[1]; ?></td>
<td><? echo $str[2]; ?></td>
</tr>
<?
}
fclose($file);
?>
</table>
