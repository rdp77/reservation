<?php

namespace App\Http\Controllers;

use App\Models\Details;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Str;
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
        $this->validate($req, [
            'tgl' => 'required|date',
            'session' => 'required',
            'room' => 'required',
        ]);

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
            'package' => 'required',
            'tgl' => 'required|date',
            'session' => 'required',
            'room' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'wa' => 'required'
        ]);

        $price = (int)$this->getPrice($req->package) + (int)Str::substr($req->code, 7);

        Details::create([
            'name' => $req->name,
            'address' => $req->address,
            'email' => $req->email,
            'phone' => $req->phone,
            'wa' => $req->wa == 1 ? 'Ada' : 'Tidak Ada',
            'price' => $price,
            'status' => 'Belum Lunas'
        ]);

        Reservation::create([
            'code' => $req->code,
            'datetime' => date("Y-m-d h:i", strtotime($req->tgl . $req->session)),
            'room' => $req->room,
            'details' => $this->countID(),
            'package' => $req->package,
            'check-out' => 'Tidak'
        ]);

        return view('pages.frontend.payment', [
            'price' => $price,
            'code' => $req->code
        ]);
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

    function countID()
    {
        return DB::table('details')->count() == 0 ?
            1 :
            DB::table('details')
            ->select('id')
            ->orderByDesc('id')
            ->limit('1')
            ->first()->id;
    }

    function getPrice($name)
    {
        switch ($name) {
            case 'PAKET NGERII':
                return 150000;
            case 'PAKET NGGRAGAS "A"':
                return 200000;
            case 'PAKET NGGRAGAS "B"':
                return 250000;
            case 'PAKET NGGRAGAS "C"':
                return 350000;
            case 'PAKET NGGRAGAS "D"':
                return 500000;
            case 'PAKET NGGRAGAS "E"':
                return 750000;
            default:
                return 750000;
        }
    }
}
