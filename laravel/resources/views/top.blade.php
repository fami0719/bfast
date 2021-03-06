@extends('layouts.layout')

@section('content')
<div class="loginPage">
  <div class="container">
    <div class="loginPage_contents">
    <h1 class="h3 loginPage_contents_title">今日の朝ごはんを自慢し合うコミュニティ</h1>
    <h2 class="h3 loginPage_contents_details">友達や家族に今日の朝ご飯をみてもらいましょう。人にみてもらうことで健康管理ができます。</h2>
    <div class="btn loginPage_contents_btn"><a class="text-white" href="{{ route('login') }}">メールアドレスでログインする</a></div>
    </div>
  </div>
</div>
@endsection
