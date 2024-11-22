<?php

namespace App\Http\Controllers;

use App\Models\genre;
use App\Models\rent;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //

    public function create(){
        return view('filmrent.genre');
    }

    public function store(Request $request)
    {
        $request->validate([
            'genre'=>'required|string|max:255'
        ]);
        
        genre::create($request->all());

        return redirect()->back()->with('success','genre stored.');
    }
}
