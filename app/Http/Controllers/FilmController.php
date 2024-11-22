<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Models\genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //

    public function create()
    {
        $genres = genre::all(); 
        return view('filmrent.film', compact('genres'));
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'director'=>'required|string|max:255',
            'genre'=>'required|string|max:255',
            'release_date'=>'required|date'
        ]);

        film::create($request->all());

        return redirect()->back()->with('success', 'film stored.');
    }

    public function index()
    {
        $films = film::all();
        return view('filmrent.films',compact('films'));
    }

    
    public function show(Request $request)
    {
        
        $film = film::findOrFail($request->id);
        
       
        return view('filmrent.show', ['film' => $film]);
    }

    
}
