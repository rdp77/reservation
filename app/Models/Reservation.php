<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservation';
    public $timestamps = false;

    protected $fillable = [
        'code',
        'datetime',
        'room',
        'details',
        'package',
        'check-out'
    ];

    public function relationDetails()
    {
        return $this->belongsTo('App\Models\Details', 'details', 'id');
    }
}
