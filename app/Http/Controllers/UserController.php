<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        User::create($data);
        return redirect()->route('user.index')->with('message', "Successfully created new User!");
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function saveUpdate(User $user, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user->update($data);
        return redirect()->route('user.index')->with('message', "Successfully updated new User!");
    }

    public function delete(User $user)
    {
        $user->delete($user);
        return redirect()->route('user.index')->with('message', "Successfully deleted User!");
    }
}
