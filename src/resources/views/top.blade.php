<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('search') }}" method="post">
    @csrf
    <input type="search" name="search" placeholder="キーワードを入力">
    <input type="submit" name="submit" value="検索">
  </form>
</body>
</html>