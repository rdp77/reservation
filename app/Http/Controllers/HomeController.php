<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $room = Room::all();
        return view('home', ['room' => $room]);
    }

    public function checkIn()
    {
    }

    public function payment()
    {
    }
}
