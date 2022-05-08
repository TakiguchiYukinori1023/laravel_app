@extends('layouts.base')

@section('title', 'お問い合わせフォーム確認画面')

@section('content')
  {{ Form::open(['route' => ['inquiryfinish'], 'method' => 'post']) }}
    {{ Form::text('name', $input->name, ['placeholder' => 'お名前を入力してください']) }}
    {{ Form::email('email', $input->email, ['placeholder' => 'メールアドレスを入力してください']) }}
    {{ Form::textarea('content', $input->content, ['placeholder' => 'お問い合わせ内容を入力してください']) }}
    {{ Form::submit('送信', ['class'=>'submit']) }}
  {{ Form::close() }}
@endsection