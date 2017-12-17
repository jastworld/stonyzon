<?php

namespace App\Http\Controllers;
use App\Payment;
use App\Item;
use Auth;
use DB;
use Illuminate\Http\Request;

class CashoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cashout.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $customer = Auth::user();//->getId();

            $paymentInfo = array(
                'customerId'=>$customer->getId(),
                'address' =>  $customer->address,
                'cardNumber'=> $request->cardNumber,
                'month'=>$request->month,
                'year'=>$request->year,
                'cvv'=>$request->cvv,
            );

            DB::table('payments')->insert($paymentInfo);

            DB::table('shopping_carts') ->where('customerId', $customer->getId())->delete();

            $datas = Item::all();

            return view('front.home',compact('datas'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
