<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;

    protected $table = 'details';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'wa',
        'total',
        'status',
        'price'
    ];
}
