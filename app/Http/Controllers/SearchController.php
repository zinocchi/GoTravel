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
        if ($request->input('query') == 'hotel') {
            return redirect('/hotel');
        } else if ($request->input('query') == 'villa') {
            return redirect('/villa');
        } else if ($request->input('query') == 'flights') {
            return redirect('/fligths');
        } else if ($request->input('query') == 'todo') {
            return redirect('/to-do');
        } else {
            return redirect('/')->with('error', 'Invalid search query');
        }

    }
}
