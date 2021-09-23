<html>

<head>
    <meta charset="utf-8">
    <title>アンケート集計</title>
  
</head>


<?php
/* <p>は改行機能、＆￥nbspは半角スペースのおまじないみたいな
ここからまずpostにtextを送る
*/
?>
<body>
    <h1>好きな漫画をひたすら送信するフォーム</h1>
    <form action="write.php" method="post">
        <p>お名前&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name"></p>
        <p>e-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="mail"></p>
        <p>好きな漫画: <input type="text" name="manga"></p>
        <input type="submit" value="送信">
    </form>
</body>

</html>
