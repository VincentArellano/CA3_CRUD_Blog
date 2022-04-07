<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PersonalController extends Controller
{
    public function index($id)
    {
        return view('personal');
    }

    public function show($id)
    {
        return view('personal')
            ->with('user', User::where('id', $id)->first());
    }
}
