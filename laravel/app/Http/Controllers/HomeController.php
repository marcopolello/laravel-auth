<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function sendMail(Request $request){
    $data = $request -> validate([
      'text' => 'required|min:5'
    ]);
    Mail::to(Auth::user()->email)
      -> send(new TestMail($data['text']));
    return redirect() -> back();
  }

  public function sendEmptyMail(Request $request){

    Mail::to(Auth::user()->email)
      -> send(new TestMail());
    return redirect() -> back();
  }

  public function updateIcon(Request $request){
    $request -> validate([
      'icon' => 'required|file'
    ]);
    $image = $request -> file('icon');

    $ext = $image -> getClientOriginalExtension();
    $name = rand(1000000, 9999999) . '_' . time();
    $destfile = $name . '.' . $ext;

    $file = $image -> storeAs('icon', $destfile, 'public');

    dd($image,$ext,$name, $destfile);
  }

  public function index()
  {
      return view('home');
  }
}
