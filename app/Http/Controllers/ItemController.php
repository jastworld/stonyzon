<?php

namespace App\Http\Controllers;
use App\Item;
use App\Inventory;
use Illuminate\Http\Request;

use DB;
use DateTime;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('employee.item.create');
    }

    public function showAll(){

        $datas = Inventory::all();
        return view('employee.item.view',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'type'=>'required',
            'quantity'=>'required',
        ]);

        $Item = new Item;
        $Item->name = $request->name;
        $Item->description = $request->description;
        $Item->price = $request->price;
        $Item->type = $request->type;
        $Item->image = $request->image;

        $Item->save();

        $inventory = array(
            'itemId' =>  $Item->itemId,
            'quantity' =>  $request->quantity,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),

        );

        DB::table('inventories')->insert($inventory);

        return redirect('employee/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = Inventory::find($id);
        return view('employee.item.show',compact('inventory'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return view('employee.item.edit',compact('inventory'));
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'type'=>'required',
            'quantity'=>'required',
        ]);
        //$inventory= Inventory::where('inventoryId',$id)->pluck('itemId')->first();
        $inventory  = DB::table('inventories')
            ->where('inventoryId', '=', $id)
            ->get();
        $itemId = $inventory[0]->itemId;
        $Item = Item::find($itemId);
        $Item->name = $request->name;
        $Item->description = $request->description;
        $Item->price = $request->price;
        $Item->type = $request->type;
        $Item->image = $request->image;
        $Item->save();
        DB::table('inventories')
            ->where('inventoryId',$id)
            ->update(['quantity'=>$request->quantity]);

        session()->flash('message','Updated Successfully');

        return redirect('employee/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventoryItem = Inventory::find($id);
        $inventoryItem->delete();

        return redirect('/employee/viewall');
    }
}
