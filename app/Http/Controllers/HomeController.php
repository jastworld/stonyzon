<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\payment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if (Auth::check())
        {
            $customerId = Auth::user()->getId();
            $user = User::find($customerId);
            //return $user;
            $payment = Payment::find($customerId);

            return view('home',compact('user', 'payment'));
        }
    }

}
