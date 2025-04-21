<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
           'name' => 'required|string|max:255',
           'photo' => 'nullable|image|max:2048',
        ]);

        $user->name = $request->name;

        if ($request->hasFile('photo')) {

            if ($user->photo) {
                Storage::delete('public/' . $user->photo);
            }


            $path = $request->file('photo')->store('profile_photos', 'public');
            $user->photo = $path;
        }

         $user->save();

        return redirect()->back()->with('success', 'Profile updated!');
    }
}
