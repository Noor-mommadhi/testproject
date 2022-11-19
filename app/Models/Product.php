<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='item';

    protected $fillable=[
        'name',
        'currency',
        'cost',
        'tax',
        'totalcost',
        'visibility',


    ];

}

