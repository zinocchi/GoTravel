<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Villa;
use App\Models\Flight;
use App\Models\ToDo;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $hotels = Hotel::where('name', 'like','%' . $request->search . '%')->get();
        $villas = Villa::where('name', 'like', "%{$query}%")->get();
        $flights = Flight::where('destination', 'like', "%{$query}%")->get();
        $toDos  = ToDo::where('activity', 'like', "%{$query}%")->get();

        return view('search.results', compact('query', 'hotels', 'villas', 'flights', 'toDos'));
    }
}
 