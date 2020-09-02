<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name' ,'building','floor','size','device','content','image'
    ];
}
