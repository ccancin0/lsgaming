<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index() {
      $data = array(
        'title' => 'Rumble Fighter',
        'class' => ['', 'sub-nav-off', 'loggedIn-off']
      );
      return view('pages.index')->with($data);
    }

    public function showMyAccount() {
      $data = array(
        'title' => 'Dashboard',
        'class' => ['fixed-off', 'sub-nav-off', 'loggedIn-off']
      );
      return view('pages.myaccount')->with($data);
    }

    public function showMyProfile() {
      $data = array(
        'title' => 'Profile',
        'class' => ['fixed-off', 'sub-nav-off', 'loggedIn-off']
      );
      return view('pages.profile')->with($data);
    }

    public function addFunds() {
      $data = array(
        'title' => 'Profile',
        'class' => ['fixed-off', 'sub-nav-off', 'loggedIn-off']
      );
      return view('pages.addcredit')->with($data);
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
