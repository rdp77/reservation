<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $room = Room::all();
        return view('home', ['room' => $room]);
    }

    public function package(Request $req)
    {
        $date = date("Y-m-d h:i", strtotime($req->tgl . $req->session));
        $room = $req->room;
        return view('pages.frontend.package', [
            'date' => $date, 'room' => $room
        ]);
    }

    public function checkIn(Request $req)
    {
        $rooms = Room::all();
        $code = $code = "MPBB-" . str_pad($this->getRandom(), 5, '0', STR_PAD_LEFT);

        return view('pages.frontend.check-in', [
            'rooms' => $rooms,
            'date' => $req->date,
            'room' => $req->room,
            'package' => $this->packageVariant($req->package),
            'code' => $code
        ]);
    }

    public function payment(Request $req)
    {
        $this->validate($req, [
            'code' => 'required',
            'name' => 'required',
            'condition' => 'required'
        ]);

        return view('pages.frontend.payment');
    }

    public function getRandom()
    {
        do {
            $random = rand(00001, 99999);
            $check = DB::table('reservation')
                ->select('code')
                ->having('code', '=', $random)
                ->first();
        } while ($check != null);
        return $random;
    }

    function packageVariant($number)
    {
        switch ($number) {
            case 1:
                return 'PAKET NGERII';
            case 2:
                return 'PAKET NGGRAGAS "A"';
            case 3:
                return 'PAKET NGGRAGAS "B"';
            case 4:
                return 'PAKET NGGRAGAS "C"';
            case 5:
                return 'PAKET NGGRAGAS "D"';
            case 6:
                return 'PAKET NGGRAGAS "E"';
            default:
                return 'PAKET NGGRAGAS "E"';
        }
    }
}
