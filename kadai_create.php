<?php
//var_dump($_POST);
//exit();
//データ受け取り
$onamae = $_POST['onamae'];
//$onamae = filter_input(INPUT_POST, 'onamae');
$email = $_POST['email'];
$pets = $_POST['pets'];

//書き込みデータ作成（スペース区切りで最後に改行コードを追加）
//CSVで書き込むために配列にしてデータを渡す
$write_data = array($onamae, $email, $pets);
//var_dump($write_data[0]);
//exit();

//処理：ファイルを開く
$file = fopen('data/data.csv', 'a');

//処理：ファイルロック
flock($file, LOCK_EX);

//処理：ファイル書込
fputcsv($file, $write_data);

//処理：ファイルロック解除
flock($file, LOCK_UN);

//処理：ファイル閉じる
fclose($file);

//処理：入力画面へ戻る（移動）
header("location:kadai_input.php");
