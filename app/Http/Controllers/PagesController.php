<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'showForums', 'showAnnouncements', 'showThread']]);
    }

    public function index() {
      return view('pages.index')->with(['title' => 'Rumble Fighter', 'class' => '']);
    }

    public function showMyAccount() {
      return view('pages.user.myaccount')->with(['title' => 'Dashboard', 'class' => 'fixed-off']);
    }

    public function showMyProfile() {
      return view('pages.user.profile')->with(['title' => 'Profile', 'class' => 'fixed-off']);
    }

    public function addFunds() {
      return view('pages.addcredit')->with(['title' => 'Get Astros', 'class' => 'fixed-off']);
    }

    public function showForums() {
      return view('pages.forums.forum')->with(['title' => 'Forums', 'class' => 'fixed-off']);
    }

    public function showAnnouncements() {
      $posts = Post::orderBy('created_at','desc')->paginate(10);
      return view('pages.forums.announcement')->with(['title' => 'Announcements', 'class' => 'fixed-off', 'posts' => $posts]);
    }

    public function showCreateThread() {
      return view('pages.forums.create')->with(['title' => 'Create Thread/Post', 'class' => 'fixed-off']);
    }

    public function createThread(Request $request) {
      $this->validate($request, [
        'title' => 'required',
        'body' => 'required'
      ]);

      $post = new Post;
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->user_id = auth()->user()->id;
      $post->save();

      return redirect('/forums/announcements')->with('success','Post Created');
    }

    public function showThread($id) {
      $post = Post::find($id);
      return view('pages.forums.show')->with(['title' => 'Announcements', 'class' => 'fixed-off', 'post' => $post]);
    }

    public function editThread($id) {
      $post = Post::find($id);

      // Check for correct user
      if(auth()->user()->id !== $post->user_id) {
        return redirect('/forums/announcements')->with('error', 'Unauthorized Page');
      }
      
      return view('pages.forums.edit')->with(['title' => 'Announcements', 'class' => 'fixed-off', 'post' => $post]);
    }

    public function updateThread(Request $request, $id) {
      $this->validate($request, [
        'title' => 'required',
        'body' => 'required'
      ]);

      $post = Post::find($id);
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->save();

      return redirect('/forums/announcements')->with('success','Post Updated');
    }

    public function destroyThread($id) {
      $post = Post::find($id);
      $post->delete();

      return redirect('/forums/announcements')->with('success','Post Removed');
    }
    // public function logIn() {
    //   $data = array(
    //     'title' => 'Log In',
    //     'index' => ['fixed-off', 'sub-nav-off', 'loggedIn-off']
    //   );
    //   return view('pages.login')->with($data);
    // }
    //
    // public function signUp() {
    //   $data = array(
    //     'title' => 'Sign Up',
    //     'index' => ['fixed-off', 'sub-nav-off', 'loggedIn-off']
    //   );
    //   return view('pages.signup')->with($data);
    // }
}
