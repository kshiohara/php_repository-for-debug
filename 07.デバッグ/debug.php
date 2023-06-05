<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>氏名</title>
</head>
<body>
    <section>
      <?php
        if (!empty($_POST)) {
          $lastName = $_POST['last_name'];
          $firstName = $_POST['first_name'];
          if ($lastName != null && $firstName != null) {
              echo '私の名前は'.$lastName.$firstName.'です。';
          }
      }
      ?>
    </section>
</body>
</html>
