@extends('layouts.master')

@section('content')
  <div class="bg">
    <div class="container">
      <div class="extra-border-top"></div>
      <header class="createForm">
        <h1>ANNOUNCEMENTS</h1>
      </header>
      <div class="extra-border-bottom"></div>
      <div class="form-container block">
        @if (session('success'))
            <div class="signin-msg reset-success"><strong>{{ session('success') }}</strong></div>
        @endif
        @if (session('error'))
            <div class="signin-msg reset-error"><strong>{{ session('error') }}</strong></div>
        @endif
        <a id="newPost" href="{{route('create')}}">Post New Thread</a>
        <div class="thread-container">
          <div class="header">
            <h3 id="title">Title</h3>
            <h3 id="start-date">Start Date</h3>
            <h3 id="replies">Replies</h3>
            <h3 id="views">Views</h3>
            <h3 id="last-msg">Last Message</h3>
          </div>
          @if(count($posts) > 0)
            @foreach ($posts as $post)
              <div class="thread-container">
                <div class="thread">
                  <div class="thread-title">
                    <a href="/forums/announcements/{{$post->id}}">
                      <i class="fa fa-picture-o" aria-hidden="true"></i>
                      <h3>{{$post->title}}</h3>
                      <p>{{$post->created_at}}</p>
                      <p>{{$post->user->name}}</p>
                    </a>
                  </div>
                  <div class="thread-date">
                    <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                  </div>
                  <div class="thread-date">
                    <h3>Replies</h3>
                    <p>Views</p>
                  </div>
                  <div class="thread-date">
                    <h3>100</h3>
                    <p>3,514</p>
                  </div>
                  <div class="thread-msg">
                    <h3>users</h3>
                    <p>Wednesday at 12:21 PM</p>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <p>No posts found</p>
          @endif
        @include('includes.footer')
      </div>
    </div>
  </div>
@endsection
