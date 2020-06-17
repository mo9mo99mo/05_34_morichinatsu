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
        $str .= "<tr><td>{$line}</td></tr>";
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
    <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>

<body>
    <fieldset>
        <legend>textファイル書き込み型todoリスト（一覧画面）</legend>
        <a href="kadai_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th><?= $str ?></th>
                </tr>

            </thead>
            <tbody>

            </tbody>
        </table>
    </fieldset>
</body>

</html>