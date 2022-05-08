@extends('layouts.base')

@section('title', 'お問い合わせフォーム入力画面')

@section('content')
  {{ Form::open(['route' => ['inquiryconfirm'], 'method' => 'post']) }}
    {{ Form::text('name', null, ['placeholder' => 'お名前を入力してください']) }}
    {{ Form::email('email', null, ['placeholder' => 'メールアドレスを入力してください']) }}
    {{ Form::textarea('content', null, ['placeholder' => 'お問い合わせ内容を入力してください']) }}
    {{ Form::submit('確認', ['class'=>'submit']) }}
  {{ Form::close() }}

@endsection