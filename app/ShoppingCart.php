<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable=['customerId','itemId','isOrdered','quantity'];

    public function customer(){
        return $this->hasMany(User::class ,'customerId','customerId');
        //typeId -> type map
    }

    public function itemInfo(){
        return $this->hasMany(Item::class ,'itemId','itemId');
    }


    protected $primaryKey = 'shoppingCartId';
}