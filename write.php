<?php
/* ここはinputから届いたテキストをdataフォルダのtxtに書き込む場所
*/
?>
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$manga = $_POST['manga'];


$str = $name . ',' . $mail . ',' .$manga."\n";

$file = fopen('data/data.txt', 'a' ); 
fwrite( $file, $str); 
fclose( $file ); 
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>アンケートの集計を確認しよう！<h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
