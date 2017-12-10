<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $fillable=['name'];

    protected function items()
    {
        return $this->hasMany(Item::class);
    }



}
