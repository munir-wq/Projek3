<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

use DataTables;

class RegisterController extends Controller
{
    public function buat(Request $request)
    {
        // return $request->email;
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
        ]);
        return redirect('/');
    }
}
