<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class UserController extends Controller
{
    public function index(){
        // exbindo o usuario do banco 
        $users=User::all();

        return View('users.index',compact('users'));
    }

    public function show($id){
        $user=User::find($id);
        // dd('users.show',$user);
        return View('users.show',compact('user'));
    }
}
