@extends('layouts.master')

@section('content')
  <div class="bg">
    <div class="container">
      <div class="extra-border-top"></div>
      <header class="createForm">
        <h1>{{$post->title}} by {{$post->user->username}}</h1>
      </header>
      <div class="extra-border-bottom"></div>
      <div class="form-container align">
        <div class="show">
          <div class="body-content">
          <small>Written on {{$post->created_at}}</small>
            {!!$post->body!!}
          </div>
          @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
              <div class="buttons">
                <a href="/forums/announcements/{{$post->id}}/edit">Edit</a>
                <form class="" action="{{ route('destroy', $post->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" name="submit">Delete</button>
                </form>
              </div>
            @endif
          @endif
        </div>
        @include('includes.footer')
      </div>
    </div>
  </div>
@endsection
