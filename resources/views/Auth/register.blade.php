@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="extra-border-top"></div>
    <header class="createForm">
      <h1>CREATE AN ACCOUNT</h1>
    </header>
    <div class="extra-border-bottom"></div>
    <div class="form-container">
      <form class="signup-form" method="POST" action="{{route('register')}}">
        {{ csrf_field() }}
        <h1>CREATE YOUR <span>FREE</span> ACCOUNT!</h1>
        <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">
        <p class="error"><strong>{{$errors->first('username')}}</strong></p>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">
        <p class="error"><strong>{{$errors->first('email')}}</strong></p>
        <input type="password" name="password" placeholder="Password">
        <p class="error"><strong>{{$errors->first('password')}}</strong></p>
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
        <div class="agree">
          By clicking submit, I agree to the <a href="#">User Agreement and Privacy</a> and that I am at least 13 years of age.
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    @include('includes.footer')
    </div>
  </div>
@endsection
