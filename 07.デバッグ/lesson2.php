<?php

// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>デバック練習</title>
</head>
<body>
    <section>
    <form action='./debug02.php' method="post">
        <label>姓</label>
        <input type="text" name="last_name"/>
        <label>名</label>
        <input type="text" name="first_name" />
        <label>趣味</label>
        <input type="text" name="hobby" />
        <select name="age">
            <?php foreach ($createAgeGroup() as $age) :?>
                <option value="<?php echo $age ?>" ><?php echo $age ?> </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="送信する"/>
    </form>
    </section>
</body>
</html>
