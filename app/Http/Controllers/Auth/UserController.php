<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'isAdmin' => 'nullable|boolean',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->isAdmin = $request->has('isAdmin');
        $user->save();

        return redirect()->route('index')->with('success', 'Profile updated successfully');
    }

    public function index()
    {
        $user = Auth::user();
        return view('showpr', compact('user'));
    }
}
