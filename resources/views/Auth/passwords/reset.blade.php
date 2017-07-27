@extends('layouts.master')

@section('content')
  <div class="container white">
    <div class="extra-border-top"></div>
    <header class="createForm">
      <h1>RESET PASSWORD</h1>
    </header>
    <div class="extra-border-bottom"></div>
    <form class="signup-form flex" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
        {{-- @if($errors->has('email'))
          <div class="signin-msg reset-pass"><strong>{{$errors->first('email')}}</strong></div>
        @else
          @if (session('status'))
              <div class="signin-msg reset-success"><strong>{{ session('status') }}</strong></div>
          @endif
        @endif --}}
        <h1 class="reset">E-Mail Address</h1>
        <input id="email" type="email" name="email" value="{{ $email or old('email') }}">
        <h1 class="reset">Password</h1>
        <input id="email" type="password" name="email" name="password">
        <h1 class="reset">Confirm Password</h1>
        <input id="email" type="password" name="email" name="password_confirmation">
        <button class="btn-reset" type="submit">Reset Password</button>
    </form>
    @include('includes.footer')
  </div>
@endsection
