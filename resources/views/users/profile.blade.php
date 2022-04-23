@extends('layouts.login')

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

<div class="myProfile">
   <div class="profileImage">
      <img src="{{ asset('storage/images/' . $user->images) }}">
   </div>

   {!! Form::open(['url' => '/profile', 'files' => true]) !!}

   <div class="form-group main">
      {{ Form::label('UserName') }}
      {{ Form::text('username',$user->username,['class' => 'update']) }}
   </div>
   <div class="form-group main">
      {{ Form::label('MailAddress') }}
      {{ Form::text('mail',$user->mail,['class' => 'update']) }}
   </div>
   <div class="form-group password main">
      {{ Form::label('Password') }}
      {{ Form::password('password',null,['class' => 'update']) }}
   </div>
   <div class="form-group password main">
      {{ Form::label('Password Confirm') }}
      {{ Form::password('password_confirmation',null,['class' => 'update']) }}
   </div>
   <div class="form-group main">
      {{ Form::label('Bio') }}
      {{ Form::text('bio',$user->bio,['class' => 'update']) }}
   </div>
   <div class="form-group">
      {{ Form::label('Icon Image') }}
      {{ Form::file('image',['class' => 'update update-image']) }}
   </div>
   <div class="updateBtn">
      {{ Form::submit('更新', ['class' => 'update-profile']) }}
   </div>

   {!! Form::close() !!}
</div>


@endsection
