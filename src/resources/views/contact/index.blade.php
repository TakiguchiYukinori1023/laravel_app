@extends('layouts.base')

@section('title', 'お問い合わせフォーム入力画面')

@section('content')
  {!! Form::open(['route' => ['confirm'], 'method' => 'post']) !!}
      {!! Form::label('name', '必須入力') !!}<br>
      {!! Form::text('name', null, ['placeholder' => 'お名前を入力してください']) !!}<br>
      @if ($errors->has('name'))
        <p class='error'>{{ $errors->first('text') }}</p>
      @endif
      {!! Form::label('email', 'メールアドレス') !!}<br>
      {!! Form::email('email', null, ['placeholder' => 'メールアドレスを入力してください']) !!}<br>
      @if ($errors->has('email'))
        <p class='error'>{{ $errors->first('email') }}</p>
      @endif
      {!! Form::label('content', 'お問い合わせ内容') !!}<br>
      {!! Form::textarea('content', null, ['placeholder' => 'お問い合わせ内容を入力してください']) !!}<br>
      @if ($errors->has('content'))
        <p class='error'>{{ $errors->first('content') }}</p>
      @endif
    {!! Form::submit('確認', ['class'=>'submit']) !!}
  {!! Form::close() !!}

@endsection