<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function Item()
    {
        $this->belongsTo('App\Retailer');
    }

    public function History()
    {
        $this->hasMany('App\History');
    }
}
