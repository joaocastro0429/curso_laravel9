@extends('layouts.app')

@section('title','Pagina de Listagem')
    
@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Listagem de Usuário {{$user->name}}</h1>


    <ul>
        <li>
        Nome: {{$user->name}} - 
        Email:  {{$user->email}}
        </li>
    </ul>

    <form action="{{route('users.destroy',$user->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button onclick="alert('Tem certeza que deseja excluir?')" type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4" >
                
           Excluir
        </button>
    </form>
@endsection


    