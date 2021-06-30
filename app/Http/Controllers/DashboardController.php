<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RentalController $RentalController)
    {
        $this->middleware('auth')->except('createLog');
        $this->RentalController = $RentalController;
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
            'notPayment' => $this->RentalController->getTotalNotPayment(),
            'payment' => $this->RentalController->getTotalPayment(),
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
}
