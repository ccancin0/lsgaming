<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{config('app.name', 'OGaming')}} | {{$title}}</title>
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('css/media.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <header class="nav-wrapper {{$class[0]}}">
      <nav class="container">
        <a id="logo" href="{{ url('/') }}"></a>
        <a id="navbars" href="javascript:">
          <svg width="40" height="30">
            <path d="M0,5 40,5" stroke="#FAA634" stroke-width="3"/>
            <path d="M0,14 40,14" stroke="#FAA634" stroke-width="3"/>
            <path d="M0,23 40,23" stroke="#FAA634" stroke-width="3"/>
          </svg>
        </a>
        <div class="side-menu">
          <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>News</a>
          <a href="{{ route('addCredit') }}"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Astros</a>
          <a href="#"><i class="fa fa-forumbee" aria-hidden="true"></i>Forums</a>
          <a href="#"><i class="fa fa-life-ring" aria-hidden="true"></i>Support</a>
          @if (Auth::guest())
            <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
            <a href="{{ route('register') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Up</a>
          @else
            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Messages</a>
            <a href="{{ route('dashboard') }}"><i class="fa fa-user" aria-hidden="true"></i>My Account</a>
            <a id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          @endif
        </div>

        <div class="menu-nav">
          <a id="games" href="new.php">NEWS</a>
          <a href="{{ route('addCredit') }}">ASTROS</a>
          <a href="forum.php">FORUMS</a>
          <a href="support.php">SUPPORT</a>
          @if (Auth::guest())
            <a id="login" href="{{ route('login') }}">LOGIN</a>
            <a id="signup" href="{{ route('register') }}"><img src="./img/signup.png"></a>
          @else
            <div class="loggedIn">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
              <span id="user">{{ Auth::user()->username }}</span>
              <div class="sub-nav">
                <a href="{{ route('addCredit') }}">Astros<i class="fa fa-money" aria-hidden="true"></i></a>
                <a href="#">Messages<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                <a href="{{ route('dashboard') }}">My Account<i class="fa fa-user" aria-hidden="true"></i></a>
                <a id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout<i class="fa fa-sign-out" aria-hidden="true"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </div>
            </div>
          @endif
        </div>
      </nav>
    </header>
    @yield('content')
  </body>
</html>
