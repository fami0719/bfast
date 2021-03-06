@extends('layouts.layout')

@section('content')
<div class="signupPage">
  <header class="header">
    <div>アカウントを作成</div>
  </header>
  <div class='container'>

    <form class="form mt-5" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

      <label for="file_photo" class="rounded-circle userProfileImg">
        <div class="userProfileImg_description">画像をアップロード</div>
        <i class="fas fa-camera fa-3x"></i>
        <input type="file" id="file_photo" name="img_name">

      </label>
      <div class="userImgPreview" id="userImgPreview">
        <img id="thumbnail" class="userImgPreview_content" accept="image/*" src="">
        <p class="userImgPreview_text">画像をアップロード済み</p>
      </div>
      <div class="form-group @error('name')has-error @enderror">
        <label>名前</label>
        <input type="text" name="name" class="form-control" placeholder="名前を入力してください">
        @error('name')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror

      </div>
      <div class="form-group @error('screen_name')has-error @enderror">
        <label>screen名</label>
        <input type="text" name="screen_name" class="form-control" placeholder="名前を入力してください">
        @error('screen_name')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror

      </div>
      <div class="form-group @error('email')has-error @enderror">
        <label>メールアドレス</label>
        <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力してください">
        @error('email')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror
      </div>
      <div class="form-group @error('password')has-error @enderror">
        <label>パスワード</label>
        <em>6文字以上入力してください</em>
        <input type="password" name="password" class="form-control" placeholder="パスワードを入力してください">
        @error('password')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror
      </div>
      <div class="form-group">
        <label>確認用パスワード</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="パスワードを再度入力してください">
      </div>

      
    

      <div class="text-center">
        <button type="submit" class="btn submitBtn">はじめる</button>
        <div class="linkToLogin">
          <a href="{{ route('login') }}">ログインはこちら</a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
