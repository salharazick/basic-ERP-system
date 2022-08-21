<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Usermail or Password is not matched";
        }
        else
        {
            $req->session()->put('user',$user);
            $session = session()->get('user');

            if($session != null)
            {
                return redirect('customer');
            }
        }
    }

    function register(Request $req)
    {
        $user = new User;

        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);

        $user->save();

        return redirect('login');

    }
}
