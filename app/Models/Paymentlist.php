<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentlist extends Model
{
    use HasFactory;

    protected $table='paymentlist';

    protected $fillable=[
        'name',
        'email',
        'phone',
        'date',
        'branch'


    ];
}
