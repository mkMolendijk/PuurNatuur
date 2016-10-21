<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\User;

use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function edit(User $user)
    {
        //TODO ADD ADMIN STATEMENT
        if ($user->id == Auth::user()->id) {
            return view('profile_edit', compact('user'));
        } else {
            return redirect('/profile');
        }

    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        Session::flash('status', 'Your account settings has been updated!');

        return redirect('/profile');
    }
}
