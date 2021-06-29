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

    public function check(Request $req)
    {
        dd($req->all());
    }

    public function package()
    {
        return view('pages.frontend.package');
    }

    public function checkIn()
    {
        $room = Room::all();
        return view('pages.frontend.check-in', [
            'room' => $room
        ]);
    }

    public function payment()
    {
        return view('pages.frontend.payment');
    }
}
