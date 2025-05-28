<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class DonationController extends Controller
{
    public function index()
    {
        return view('donate');
    }

    public function store(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        Charge::create([
            'amount' => $request->amount * 100,
            'currency' => 'eur',
            'source' => $request->stripeToken,
            'description' => 'Donatie UFO Meldpunt',
        ]);

        return redirect()->route('donate.thankyou');
    }
    public function thankyou()
    {
    return view('thankyou');
    }

}
