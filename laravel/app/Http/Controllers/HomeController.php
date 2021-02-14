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


  public function index()
  {
      return view('home');
  }
}
