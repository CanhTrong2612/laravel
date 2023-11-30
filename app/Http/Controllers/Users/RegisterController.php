<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $req)
    {
        $user = new User;
        $user->name = $req->user;
        $user->email = $req->email;
        $user->phone= $req->phone;
        $user->password = Hash::make($req->pass);
        $user->save();
        return redirect('login');
    }

}
