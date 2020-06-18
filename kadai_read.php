<?php
// 出力用文字列を格納する場所を定義（ここに読込んだデータをタグに入れた形式で追加していく）
$str = "";

//処理：ファイルを開く
$file = fopen('data/data.csv', 'r');

//処理：ファイルロック
flock($file, LOCK_EX);

//処理：ファイル書込、その後一行ずつ出力
if ($file) {
    while ($line = fgets($file)) {
        $str .= "<li>{$line}</li>";
    }
}

// ファイルアンロックの処理
flock($file, LOCK_UN);
// ファイル閉じる
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム送信データリスト（一覧画面）</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <fieldset>
        <h1>送信データ一覧</h1>
        <section>
            <ul class="list_result">
                <?= $str ?>
            </ul>
        </section>
        <footer>
            <a href="kadai_input.php" class="btn">入力画面へ戻る</a>
        </footer>


    </fieldset>

</body>

</html>