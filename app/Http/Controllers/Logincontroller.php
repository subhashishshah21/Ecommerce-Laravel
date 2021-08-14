<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Logincontroller extends Controller
{
    function login(Request $request)
    {
        $user = User::where('email', $request->usr)->first();
        if($user && ($user->password == $request->pass)){
            $request->session()->put('user', $user);
            return redirect('product');
        }
        else{
            return redirect('login');
        }
    }
}
