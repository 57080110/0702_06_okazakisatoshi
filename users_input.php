<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザリスト（入力画面）</title>
</head>

<body>
  <form action="users_create.php" method="POST">
    <fieldset>
      <legend>ユーザ追加（入力画面）</legend>
      <a href="users_read.php">一覧画面</a>
      <div>
        User: <input type="text" name="username" autocomplete="off">
      </div>
      <div>
        Pass: <input type="text" name="password" autocomplete="off">
      </div>
      <div>
        <button>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>