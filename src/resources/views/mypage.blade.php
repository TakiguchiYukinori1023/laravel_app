@extends('layouts.base')

@section('title', 'マイページ')

@section('content')
  <p>ようこそ{{ $loginUser->name }}さん</p>
  <a href="{{ route('cartinfo') }}">カート</a>
@endsection