<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $guarded = [];
    public function details(){
        return $this->hasMany(OrderDetail::class);
    }
}
