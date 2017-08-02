@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="extra-border-top"></div>
    <header class="createForm">
      <h1>RESET PASSWORD</h1>
    </header>
    <div class="extra-border-bottom"></div>
    <div class="form-reset">
      @if (session('status'))
          <div class="signin-msg reset-success"><strong>{{ session('status') }}</strong></div>
      @endif
      @if(count($errors) > 0)
        @foreach ($errors->all() as $error)
          <div class="signin-msg reset-pass"><strong>{{$error}}</strong></div>
        @endforeach
      @endif
      <form class="signup-form flex pad" method="POST" action="{{ route('password.request') }}">
          {{ csrf_field() }}
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="reset-form">
            <h1 class="reset">E-Mail Address</h1>
            <input id="email" type="email" name="email" value="{{ $email or old('email')}}">
          </div>
          <div class="reset-form">
            <h1 class="reset">Password</h1>
            <input id="email" type="password" name="password">
          </div>
          <div class="reset-form">
            <h1 class="reset">Confirm Password</h1>
            <input id="email" type="password" name="password_confirmation">
          </div>
          <button class="btn-reset" type="submit">Reset Password</button>
      </form>
    @include('includes.footer')
    </div>
  </div>
@endsection
