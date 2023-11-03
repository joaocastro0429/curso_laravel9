<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class UserController extends Controller
{
    public function index(){
        return View('users.index');
    }

    public function show($id){
        dd('users.show',$id);
    }
}
