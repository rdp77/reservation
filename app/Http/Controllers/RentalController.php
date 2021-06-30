<?php

namespace App\Http\Controllers;

use App\Models\Details;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Builder;

class RentalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $reservation = Reservation::with('relationDetails', 'relationRoom')
            ->get();
        return view('pages.backend.rental.indexRental', [
            'reservation' => $reservation,
            'rental' => Reservation::count(),
            'notPayment' => $this->getTotalNotPayment(),
            'payment' => $this->getTotalPayment(),
        ]);
    }

    public function show($id)
    {
        $reservation = Reservation::find($id)
            ->with('relationDetails', 'relationRoom')
            ->first();
        $room = Room::all();

        return view('pages.backend.rental.showRental', [
            'reservation' => $reservation,
            'rooms' => $room
        ]);
    }

    public function payment()
    {
        $reservation = Reservation::with('relationDetails', 'relationRoom')
            ->whereHas('relationDetails', function (Builder $query) {
                $query->where('status', '=', 'Lunas');
            })
            ->get();
        return view('pages.backend.rental.indexRental', [
            'reservation' => $reservation,
            'rental' => Reservation::count(),
            'notPayment' => $this->getTotalNotPayment(),
            'payment' => $this->getTotalPayment(),
        ]);
    }

    public function notPayment()
    {
        $reservation = Reservation::with('relationDetails', 'relationRoom')
            ->whereHas('relationDetails', function (Builder $query) {
                $query->where('status', '=', 'Belum Lunas');
            })
            ->get();
        return view('pages.backend.rental.indexRental', [
            'reservation' => $reservation,
            'rental' => Reservation::count(),
            'notPayment' => $this->getTotalNotPayment(),
            'payment' => $this->getTotalPayment(),
        ]);
    }

    public function paid($id)
    {
        $reservation = Reservation::find($id);
        $details = Details::find($reservation->details);
        $details->status = 'Lunas';
        $details->save();

        return Redirect::route('rental.index')
            ->with([
                'status' => 'Kode reservasi ' . $reservation->code . ' telah melunasi pembayarannya',
                'type' => 'info'
            ]);
    }

    public function checkOut($id)
    {
        $reservation = Reservation::find($id);
        $reservation->check_out = 'Iya';
        $reservation->save();

        return Redirect::route('rental.index')
            ->with([
                'status' => 'Kode reservasi ' . $reservation->code . ' telah melakukan check-out',
                'type' => 'info'
            ]);
    }

    function getTotal($status)
    {
        return DB::table('reservation')
            ->select('*')
            ->join('details', 'reservation.details', '=', 'details.id')
            ->where('details.status', '=', $status)
            ->count();
    }

    function getTotalPayment()
    {
        return $this->getTotal('Lunas');
    }

    function getTotalNotPayment()
    {
        return $this->getTotal('Belum Lunas');
    }
}
