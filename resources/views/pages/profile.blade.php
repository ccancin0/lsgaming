@extends('layouts.master')

@section('content')
  <div class="container white">
    <div class="extra-border-top"></div>
    <header class="createForm">
      <h1>MY ACCOUNT</h1>
    </header>
    <div class="extra-border-bottom"></div>
    <div class="form-container remove">
      <div class="right-content left">
        <a href="{{route('dashboard')}}">Home</a>
        <a href="{{route('profile')}}">Profile</a>
        <a href="#">Astros</a>
        <a href="">Messages</a>
        <a href="#">Friends</a>
        <a href="#">Coupon</a>
      </div>
      <div class="right">
        <h2>My Profile</h2>
        <form class="info" action="" method="POST">
          <div class="form-cont">
            <ul>
              <li><span>User ID</span><input readonly="" name="username" type="text" value="{{Auth::user()->username}}"></li>
              <li id="pass"><span><span class="new" style="display: none;">Old</span> Password</span><input type="text" name="pass" readonly="" value="*******"><a class="open" href="javascript:">Change Password</a></li>
              <li class="pass2" style="display: none;"><span>New Password</span><input type="password" name="pass1" readonly=""></li>
              <li class="pass2" style="display: none;"><span>Confirm Password</span><input type="password" name="pass2" readonly=""></li>
              <li id="email"><span><span class="new" style="display: none;">New </span>Email</span><input type="email" name="mail" readonly="" value="{{Auth::user()->email}}"><a class="open" href="javascript:">Change Email</a></li>
            </ul>
          </div>
          <button style="display: none;" type="submit" name="submit">Submit</button>
          <p>OGPlanet will never ask for your password. Do not share your personal infomation with anyone!!
          Your Email address will be used for password recovery and prize confirmation.
          Read <a href="#">Privacy Policy</a> for more information.</p>
        </form>
      </div>
    @include('includes.footer')
    </div>
  </div>
@endsection
