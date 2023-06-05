<?php
// デバック練習問題
// コードを読みデバックしつつジャンケンゲームを完成させてください。
// 判定が勝った時のみ勝利回数を表示させてください。
// 例)
// 山田太郎はグーを出しました。
// 相手はチョキを出しました。
// 勝敗は勝ちです。
// 3回目の勝利です。
// $_SESSIONの挙動やswitch文については調べてみてください。

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>デバック練習</title>
</head>
<body>
    <section>
    <form action='./debug03.php' method="post">
        <label>姓</label>
        <input type="text" name="last_name" value="<?php echo '山田' ?>" />
        <label>名</label>
        <input type="text" name="first_name" value="<?php echo '太郎' ?>" />
        <select name='choice'>
            <option value=0 >--</option>
            <option value=1 >グー</option>
            <option value=2 >チョキ</option>
            <option value=3 >パー</option>
        </select>
        <input type="submit" value="送信する"/>
    </form>
    </section>
</body>
</html>
