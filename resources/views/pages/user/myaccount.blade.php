@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="extra-border-top"></div>
    <header class="createForm">
      <h1>DASHBOARD</h1>
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
        <h2>My Activity</h2>
        <div class="account-home">
          <div class="account-box">
            <a href="#">
              <div class="icon"></div>
              <div class="num-msg">22<span>Messages</span></div>
            </a>
          </div>
          <div class="account-box">
            <a href="#">
              <div id="purchase" class="icon"></div>
              <div class="num-msg">0<span>Astros</span></div>
            </a>
          </div>
          <div class="account-box">
            <a href="#">
              <div id="friends" class="icon"></div>
              <div class="num-msg">0<span>My Friends</span></div>
            </a>
          </div>
        </div>
      </div>
      @include('includes.footer')
    </div>
  </div>
@endsection
