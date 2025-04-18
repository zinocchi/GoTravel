<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Destination;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

    
        $results = Destination::where('name', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%')
                    ->get();

        return view('search.results', compact('results', 'query'));
    }
}
