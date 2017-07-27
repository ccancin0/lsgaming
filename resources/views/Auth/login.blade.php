@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="extra-border-top"></div>
    <header class="createForm">
      <h1>LOG IN</h1>
    </header>
    <div class="extra-border-bottom"></div>
    <div class="form-container login-remove">
        <img src="./img/login-bg.jpg">
          <div class="login-form">
            <div class="login-header">
              <h3>Log In</h3>
              <span class="secure-icon">Secure Server</span>
            </div>
            <form class="log-form" action="{{ route('login') }}" method="POST">
              @if(count($errors) > 0)
                <div class="signin-msg"><strong>{{$errors->first('username')}}<br> {{$errors->first('password')}}</strong></div>
              @endif
              {{ csrf_field() }}
              <input type="text" name="username" value="{{old('username')}}" placeholder="Username">
              <input type="password" name="password" placeholder="Password">
              <div class="remember">
                <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                Remember ID
                <span>(What's this?)</span>
              </div>
              <button type="submit" name="submit">Login</button>
              <a class="fb-link" href="#">Connect with<br>Social ID</a>
              <a class="forgot-link" href="{{route('password.request')}}">Forgot your ID or password?</a>
            </form>
            <div class="createAccount">
              <h3>Don't have an account?</h3>
              <p>Register now for a free OGPlanet Account to start playing any of our Free-To-Play Games, it’s quick and easy!</p>
              <a href="{{route('register')}}">Free Signup</a>
            </div>
          </div>
      @include('includes.footer')
      </div>
  </div>
@endsection
