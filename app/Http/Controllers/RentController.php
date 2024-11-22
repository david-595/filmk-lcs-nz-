<?php

namespace App\Http\Controllers;

use App\Models\rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'rent_name' => 'required|string|max:255', 
            'rent_date' => 'required|date', 
            'film_id' => 'required|integer|min:0|exists:films,id' ,
            

        ]);

        // Létrehozza a bérlés rekordot a bemeneti adatok alapján.
        rent::create([
            'rent_name' => $request->rent_name,
            'film_id' => $request->film_id,
            'rent_date' => $request->rent_date
        ]);
        return redirect()->back()->with('success', 'rent stored.');

    }
}
