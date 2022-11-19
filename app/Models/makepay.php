<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makepay extends Model
{
    use HasFactory;
    protected $table='makepayment';
    protected $fillable=[
        'name',
        'email',
        'phone',
        'Pname',
        'payment',
        'amount'
    ];
}
