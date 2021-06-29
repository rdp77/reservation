<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('createLog');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('dashboard', [
            'log' => Log::limit(7)
                ->get(),
            'rental' => Reservation::count(),
            'notPayment' => $this->getTotalNotPayment(),
            'payment' => $this->getTotalPayment(),
            'users' => User::count()
        ]);
    }

    public function log()
    {
        return view('pages.backend.log.IndexLog', [
            'log' => Log::all()
        ]);
    }

    public function createLog($header, $ip, $action)
    {
        Log::create([
            'info' => $action,
            'u_id' => Auth::user()->id,
            'url' => URL::full(),
            'user_agent' => $header,
            'ip' => $ip,
            'added_at' => date("Y-m-d H:i:s"),
        ]);
    }

    public function rental()
    {
        $reservation = Reservation::all();
        return view('pages.backend.rental.indexRental', [
            'reservation' => $reservation,
            'rental' => Reservation::count(),
            'notPayment' => $this->getTotalNotPayment(),
            'payment' => $this->getTotalPayment(),
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
