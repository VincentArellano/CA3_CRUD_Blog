<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PersonalController extends Controller
{
    public function index($id)
    {
        return view('user.personal');
    }

    public function show($id)
    {
        return view('user.personal')
            ->with('user', User::where('id', $id)->first());
    }

    public function edit($id)
    {
        return view('user.edit')
            ->with('user', User::where('id', $id)->first());
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'date_of_birth' => $request->input('date_of_birth'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'phone' => $request->input('phone'),
                'favourite_char' => $request->input('favourite_char'),
                'bio' => $request->input('bio')
            ]);

            return view('user.personal')
            ->with('user', User::where('id', $id)->first())
            ->with('message', 'Your details has been updated!');
    }
}
