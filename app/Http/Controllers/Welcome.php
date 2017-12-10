<?php

namespace App\Http\Controllers;
use App\Item;
use DB;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function index()
    {
        $datas = Item::all();

       return view('front.home',compact('datas'));
    }

    public  function items(){
        return view('front.items');
    }
    public  function item(){

        return view('front.item');
    }
}
