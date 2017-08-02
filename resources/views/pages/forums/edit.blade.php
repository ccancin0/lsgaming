@extends('layouts.master')

@section('content')
  <div class="bg">
    <div class="container">
      <div class="extra-border-top"></div>
      <header class="createForm">
        <h1>EDIT POST</h1>
      </header>
      <div class="extra-border-bottom"></div>
      <div class="form-container align">
        @if(count($errors) > 0)
          @foreach ($errors->all() as $error)
            <div class="signin-msg reset-pass"><strong>{{$error}}</strong></div>
          @endforeach
        @endif
        <form class="create-form" method="POST" action="{{ route('update', $post->id) }}">
          {{ csrf_field() }}
          <h3>Title</h3>
          <input type="text" name="title" value="{{$post->title}}">
          <h3>Content</h3>
          <textarea rows="4" cols="50" name="body" id="article-ckeditor">{!!$post->body!!}</textarea>
          {{ method_field('PUT') }}
          <button type="submit" name="submit">Submit</button>
        </form>
        @include('includes.footer')
      </div>
    </div>
  </div>
@endsection
