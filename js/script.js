//入力欄が空の場合アラートを表示する
function chk() {
    if ($('input[name="onamae"]').val() == "") {
        alert("お名前が記入されていません。");
        return false;
    }
}
$('#post').on('click', function () {
    //入力欄のデータ
    let name = $('#name').val();
    let mail = $('#mail').val();
    if (mail == "") {
        //何も入力されていない
        alert("お名前、メールアドレスを入力してください");
        //$('#name').append('<p class="caution">名前が入力されていません！</p>');
        //$('#email').append('<p class="caution">メールアドレスが入力されていません！</p>');
    }
    if (name == "") {
        //$('#name').append('<p class="caution">名前が入力されていません！</p>');
    }
    else {
        //$('#email').append('<p class="caution">メールアドレスが入力されていません！</p>');
    }
});