<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($userId)
    {
        $user = User::findOrFail($userId);
        return view('client.profile.index', compact('user'));

    }

    public function edit($userId)
    {
        $user = User::findOrFail($userId);
        return view('client.profile.edit', compact('user'));
    }

    public function update(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->update($request->all());
        return redirect()->route('client.profile.show', $userId);
    }
}
