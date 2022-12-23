<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $users = User::get();
        return view('user', [
            'users' =>$users
        ]);
    }

    function create()
    {
        return view('create-user');
    }

    function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit-user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if ($request->password) {
            User::whereId($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } else {
            User::whereId($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('user');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user');
    }
}
