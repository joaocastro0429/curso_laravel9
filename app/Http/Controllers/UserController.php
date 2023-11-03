<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function index(){
        // exbindo o usuario do banco 
        $users=User::all();

        return View('users.index',compact('users'));
    }

    public function show($id){
        if(!$user=User::find($id)){
            return redirect()->back();
        }
        
        // dd('users.show',$user);
        return View('users.show',compact('user'));
    }
    public function create(){
        return view('users.create');
    }

    public function store(Request $resquest){

        $data=$resquest->only([
            'name',
            'email',
            'password'
        ]);

       $user= User::create($data);
        

        return redirect()->route('users.index');
    }
    
}
