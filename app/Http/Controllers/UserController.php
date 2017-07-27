<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Foundation\Auth\RegistersUsers;

/**
 * Handle Sign Up and Log In
 */
class UserController extends Controller
{

  // use AuthenticatesUsers;
  // use RegistersUsers;

  public function __construct() {
    $this->middleware('guest', ['except' => 'logOut']);
  }

  public function signUp(Request $request) {
    $this->validate($request, [
      'username' => 'required|max:16|unique:users',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:8|confirmed'
      // 'password_confirmation' => 'required|same:password|min:8'
    ]);

    $user = new User;
    $user->username = $request->input('username');
    $user->password = bcrypt($request->input('password'));
    $user->email = $request->input('email');
    $user->save();

    Auth::login($user);

    return redirect('/');
  }

  public function logIn(Request $request) {
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required|min:8'
    ]);

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
      return redirect('/');
    }
    return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
  }

  public function logOut() {
    Auth::logout();
    return redirect('/');
  }
}
