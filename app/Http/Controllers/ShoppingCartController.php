<?php

namespace App\Http\Controllers;
use View;
use App\ShoppingCart;
use DB;
use Illuminate\Http\Request;
use Auth;
use App\Item;
use App\Inventory;
class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check())
        {
            $customerId = Auth::user()->getId();

            $cartItems =  ShoppingCart::where('customerId', $customerId)->get();

            /*return $cartItems[3]->itemInfo;*/

          return view('cart.index', compact('cartItems'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($itemId)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        if (Auth::check())
        {
            $customerId = Auth::user()->getId();

            $item = DB::table('items')
                ->where('itemId', '=', $id)
                ->get();
            $cartItem = array(
                'customerId'=>$customerId,
                'itemId' =>  $item[0]->itemId,
                'quantity'=> $request->quantity,
            );

            DB::table('shopping_carts')->insert($cartItem);
        }
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingCart $shoppingCart)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventoryItem = ShoppingCart::find($id);
        $inventoryItem->delete();
        return redirect()->back();
    }


}
