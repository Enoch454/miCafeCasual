<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function detallesView($id){
        //Auth::user()->authorizeRoles('admin');
        $user = User::find($id);
        return view('ordenes.detallesUser', ['user' => $user]);
    }
}
