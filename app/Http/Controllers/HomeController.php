<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gebeurtenis;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth'); // Removed auth middleware
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalMeldingen = Gebeurtenis::count();
        $meldingenDezeMaand = Gebeurtenis::whereMonth('created_at', Carbon::now()->month)
                                      ->whereYear('created_at', Carbon::now()->year)
                                      ->count();

        $recentSightings = Gebeurtenis::with('images') // Eager load images
                                      ->orderBy('created_at', 'desc')
                                      ->take(3)
                                      ->get();

        return view('home', compact('totalMeldingen', 'meldingenDezeMaand', 'recentSightings'));
    }
}
