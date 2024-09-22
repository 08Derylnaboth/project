<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use CrudTrait;
    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }

    public function product(){
        return $this->hasOne('App\Models\Product','id','product_id');
    }
}
