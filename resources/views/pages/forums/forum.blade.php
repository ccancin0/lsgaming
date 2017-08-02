@extends('layouts.master')

@section('content')
  <div class="bg">
    <div class="container">
      <div class="extra-border-top"></div>
      <header class="createForm">
        <h1>FORUMS</h1>
      </header>
      <div class="extra-border-bottom"></div>
      <div class="form-container remove">
        <div class="forum-type">
          <div class="forum-title">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <div class="forum-left">
              <a href="{{route('announcements')}}">Announcements</a>
              <p>Discussion: 273 Messages: 1,223</p>
            </div>
          </div>
          <div class="forum-right">
            Latest: Today at 3:17 PM
          </div>
        </div>
        <div class="forum-type">
          <div class="forum-title">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <div class="forum-left">
              <a href="#">Off-Topic</a>
              <p>Discussion: 211 Messages: 1,123</p>
            </div>
          </div>
          <div class="forum-right">
            Latest: Yesterday at 4:17 PM
          </div>
        </div>
        <div class="forum-type">
          <div class="forum-title">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <div class="forum-left">
              <a href="#">General Discussion</a>
              <p>Discussion: 123 Messages: 143</p>
            </div>
          </div>
          <div class="forum-right">
            Latest: Today at 3:12 AM
          </div>
        </div>
        <div class="forum-type">
          <div class="forum-title">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <div class="forum-left">
              <a href="#">Match Planning</a>
              <p>Discussion: 273 Messages: 1,223</p>
            </div>
          </div>
          <div class="forum-right">
            Latest: Today at 3:17 PM
          </div>
        </div>
        <div class="forum-type">
          <div class="forum-title">
            <i class="fa fa-comments" aria-hidden="true"></i>
            <div class="forum-left">
              <a href="#">Suggestions</a>
              <p>Discussion: 273 Messages: 1,223</p>
            </div>
          </div>
          <div class="forum-right">
            Latest: Today at 3:17 PM
          </div>
        </div>
      @include('includes.footer')
      </div>
    </div>
  </div>
@endsection
