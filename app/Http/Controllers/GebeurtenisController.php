<?php

namespace App\Http\Controllers;

use App\Models\Gebeurtenis;
use App\Models\Location;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GebeurtenisController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location_name' => 'required|string|max:255',
            'observation_time' => 'required|integer|min:1|max:1440', // minutes in a day
            'certainty' => 'required|integer|min:1|max:10',
            'date' => 'required|date|before_or_equal:today',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB max
        ]);

        // Find or create location
        $location = Location::firstOrCreate([
            'name' => $request->location_name
        ]);

        // Create the gebeurtenis
        $gebeurtenis = Gebeurtenis::create([
            'user_id' => 1, // For now, we'll use a fixed user ID since we don't have auth yet
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location_name, // Keep the old field for backward compatibility
            'location_id' => $location->id,
            'observation_time' => $request->observation_time,
            'certainty' => $request->certainty,
            'date' => $request->date,
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('ufo-images', $filename, 'public');

            // Store image record in database
            Image::create([
                'gebeurtenis_id' => $gebeurtenis->id,
                'path' => $path,
            ]);
        }

        return redirect()->route('meld')->with('success', 'Je UFO melding is succesvol verzonden! Bedankt voor je bijdrage aan ons onderzoek.');
    }

    public function indexMijnMeldingen()
    {
        $user = Auth::user();
        // Ensure user is authenticated before trying to get their ID
        if (!$user) {
            // Redirect to login or show an error, depending on your app's flow
            return redirect()->route('login')->with('error', 'Je moet ingelogd zijn om je meldingen te bekijken.');
        }

        $gebeurtenissen = Gebeurtenis::with('images') // Eager load images
                                    ->where('user_id', $user->id)
                                    ->orderBy('created_at', 'desc')
                                    ->get();

        return view('mijnmeldingen', compact('gebeurtenissen'));
    }

    public function indexAlleMeldingen(Request $request)
    {
        $query = Gebeurtenis::with('images', 'user'); // Eager load images and user

        // Filter by location
        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        // Filter by minimum certainty
        if ($request->filled('certainty')) {
            $query->where('certainty', '>=', $request->certainty);
        }

        // Sort results
        $sortBy = $request->input('sort_by', 'newest'); // Default to newest
        switch ($sortBy) {
            case 'oldest':
                $query->orderBy('date', 'asc')->orderBy('created_at', 'asc');
                break;
            case 'certainty_high_low':
                $query->orderBy('certainty', 'desc');
                break;
            case 'certainty_low_high':
                $query->orderBy('certainty', 'asc');
                break;
            case 'newest':
            default:
                $query->orderBy('date', 'desc')->orderBy('created_at', 'desc');
                break;
        }

        $gebeurtenissen = $query->get();

        return view('allemeldingen', compact('gebeurtenissen'));
    }
} 