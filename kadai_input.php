<!-- 入力内容のチェック -->
<?php
var_dump($_POST);
$error = array();

if (isset($_POST['submit']) && $_POST['submit'] === "送信") {
    $onamae = $_POST['onamae'];
    $email = $_POST['email'];
    $pets = $_POST['pets'];

    if ($onemae === "") {
        $error['onamae'] = "名前が入力されていません。";
    }

    if ($email === "") {
        $error['email'] = "メールアドレスが入力されていません。";
    }

    if ($pets === "") {
        $error['pets'] = "アンケート回答が入力されていません。";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題：アンケートアプリ</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="js/script.js">
</head>

<body>
    <header>
        <h1>課題：アンケートアプリ</h1>
    </header>
    <section>
        <?php
        echo "<ul>";
        foreach ($error as $caution) {
            echo "<li>";
            echo $caution;
            echo "</li>";
        }
        echo "</ul>";
        ?>
        <form action="kadai_create.php" method="post" onsubmit="return chk(this)">
            <div class="form_1colmun">
                <div class="form_input">
                    <input id="name" type="text" name="onamae" placeholder="お名前（ニックネームもOK）">
                </div>
            </div>
            <div class="form_1colmun">
                <div class="form_input">
                    <input id="mail" type="text" name="email" placeholder="メールアドレス">
                </div>
            </div>
            <div class=" form_1colmun">
                <div class="form_ttl">
                    アンケート：ペットを飼うなら？
                </div>
                <ul class="form_radio">
                    <li>
                        <input type="radio" value="イヌ" name="pets">
                        <label for="イヌ">ダンゼン、犬でしょ！</label>
                    </li>
                    <li>
                        <input type="radio" value="ネコ" name="pets">
                        <label for="ネコ">やっぱ、ネコでしょ！</label>
                    </li>
                    <li>
                        <input type="radio" value="ウサギ" name="pets">
                        <label for="ウサギ">ウサギ！ウサギ！</label>
                    </li>
                    <li>
                        <input type="radio" value="ハリネズミ" name="pets">
                        <label for="ハリネズミ">ハリネズミ！</label>
                    </li>
                    <li>
                        <input type="radio" value="イグアナ" name="pets">
                        <label for="イグアナ">イグアナかな</label>
                    </li>
                    <li>
                        <input type="radio" value="植物" name="pets">
                        <label for="植物">生き物無理。植物がいいな</label>
                    </li>
                </ul>
            </div>
            <div class="form_btn">
                <button id="post" type="submit" class="btn" value="送信">送信</button>
            </div>
        </form>
    </section>
    <footer>
        <a href="kadai_read.php" class="btn">送信結果一覧をみる</a>
    </footer>


</body>

</html>