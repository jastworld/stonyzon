<?php

namespace App\Http\Controllers;
use App\Item;
use DB;
use Illuminate\Http\Request;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('front.item',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function electronic(){
        $items = DB::table('items')
            ->where('type', 1)->get();
        return view('front.items',compact('items'));
    }
    public function furniture(){
        $items = DB::table('items')
            ->where('type', 2)->get();
        return view('front.items',compact('items'));
    }
    public function clothing(){
        $items = DB::table('items')
            ->where('type', 3)->get();
        return view('front.items',compact('items'));
    }
    public function food(){
        $items = DB::table('items')
            ->where('type', 4)->get();
        return view('front.items',compact('items'));

    }
}
