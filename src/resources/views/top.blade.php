<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="flex-center position-ref full-height">
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
  </div>
  {{ Form::open(['route' => ['search'], 'method' => 'get']) }}
    {{ Form::text('text', null, ['placeholder' => 'キーワードを入力してください', 'size' => 30]) }}
    {{ Form::submit('検索', ['class'=>'submit'] )}}
  {{ Form::close() }}
</body>
</html>