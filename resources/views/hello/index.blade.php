@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです</p>
  <p>Controller Value<br>'message' = {{$message}}</p>
  <p>ViewComposer Value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection