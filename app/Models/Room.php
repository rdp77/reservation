<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'room';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function relationReservation()
    {
        return $this->hasOne('App\Models\Reservation', 'id', 'room');
    }
}
