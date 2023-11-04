<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Spatie\FlareClient\View;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function index(Request $request){
        // exbindo o usuario do banco 
        $users=User::where('name','LIKE',"%{$request->name}%")->get();
        
        

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

    public function store(StoreUserRequest $resquest){

        $data=$resquest->only([
            'name',
            'email',
            'password'
        ]);

       User::create($data);
        

        return redirect()->route('users.index');
    }

    public function edit($id){
        if(!$user=User::find($id)){
           return redirect()->route('users.edit');
        }

        return view('users.edit',compact('user'));


    }

    public function update(StoreUserRequest $request,$id){
        if(!$user=User::find($id)){
           return redirect()->route('users.index');
           
        }
        $data=$request->only('name','email');

      $user->update($data);
      return redirect()->route('users.index');
  


    }

    public function destroy($id){

        if(!$user=User::find($id)){
            return redirect()->route('users.index');
            
         }

         $user->delete();
         return redirect()->route('users.index');
    }

    

}




