<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //

    protected $fillable=['itemId','quantity'];
    public function item(){
        return $this->hasMany(Item::class ,'itemId','itemId');
        //typeId -> type map
    }



    protected $primaryKey = 'inventoryId';
}
