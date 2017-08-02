@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="extra-border-top"></div>
    <header class="createForm">
      <h1>RESET PASSWORD</h1>
    </header>
    <div class="extra-border-bottom"></div>
    <div class="form-reset">
      @if($errors->has('email'))
        <div class="signin-msg reset-pass"><strong>{{$errors->first('email')}}</strong></div>
      @else
        @if (session('status'))
            <div class="signin-msg reset-success"><strong>{{ session('status') }}</strong></div>
        @endif
      @endif
      <form class="signup-form flex" method="POST" action="{{ route('password.email') }}">
          {{ csrf_field() }}
          <h1 class="reset email-text">E-Mail Address</h1>
          <input id="email" type="email" name="email" value="{{ old('email') }}">
          <button class="btn-reset" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i>Send Password Reset Link</button>
      </form>
    @include('includes.footer')
    </div>
  </div>
@endsection
