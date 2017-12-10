<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable=['name','description','price','type','image'];

    public function category(){
        return $this->belongsTo(Type::class ,'type','typeId');
        //typeId -> type map
    }

    /*public function inventory_id(){
        return $this->belongsTo(Inventory::class ,'type','typeId');
        //typeId -> type map
    }*/

    protected $primaryKey = 'itemId';
}
