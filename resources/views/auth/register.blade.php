@extends('layouts.logout')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
        <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
        </ul>
</div>
@endif

<div class="login-wrap">
  {!! Form::open(['url' => '/register']) !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input']) }}

{{ Form::label('メールアドレス') }}
{{ Form::text('mail',null,['class' => 'input']) }}

{{ Form::label('パスワード') }}
{{ Form::password('password',['class' => 'input']) }}

{{ Form::label('パスワード確認') }}
{{ Form::password('password-confirm',['class' => 'input']) }}

{{ Form::submit('登録',['class'=>'register']) }}

<p class="return"><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}
</div>


@endsection
