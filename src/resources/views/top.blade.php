@extends('layouts.base')

@section('title', 'トップページ')

@section('content')
  <ul>
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
  </ul>

  {{ Form::open(['route' => ['search'], 'method' => 'get']) }}
    {{ Form::text('text', null, ['placeholder' => 'キーワードを入力してください', 'size' => 30]) }}
    {{ Form::submit('検索', ['class'=>'submit']) }}
  {{ Form::close() }}

  <a href="{{ route('index') }}">お問い合わせフォーム</a>
@endsection