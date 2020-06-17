<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題：アンケートアプリ</title>
</head>

<body>
    <form action="kadai_create.php" method="post">
        <div>
            <div>
                お名前（ニックネームもOK）
            </div>
            <div>
                <input type="text" name="onamae">
            </div>
        </div>
        <div>
            <div>
                メールアドレス
            </div>
            <div>
                <input type="text" name="email">
            </div>
        </div>
        <div>
            <div>
                ペットを飼うなら？
            </div>
            <div>
                <input type="radio" value="イヌ" name="pets">
                <label for="イヌ">ダンゼン、犬でしょ！</label>
                <input type="radio" value="ネコ" name="pets">
                <label for="ネコ">やっぱ、ネコでしょ！</label>
                <input type="radio" value="ウサギ" name="pets">
                <label for="ウサギ">ウサギ！</label>
                <input type="radio" value="ハリネズミ" name="pets">
                <label for="ハリネズミ">ハリネズミ！</label>
                <input type="radio" value="イグアナ" name="pets">
                <label for="イグアナ">イグアナかな</label>
                <input type="radio" value="植物" name="pets">
                <label for="植物">生き物無理。植物がいいな</label>
            </div>
        </div>
        <div>
            <button>送信</button>
        </div>
        <a href="kadai_read.php">一覧画面</a>
    </form>
</body>

</html>