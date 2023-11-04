@extends('layouts.app')

@section('title','Pagina de Listagem')
    
@section('content')
    <h1>Listagem de Usuário {{$user->name}}</h1>


    <ul>
        <li>
        Nome: {{$user->name}} - 
        Email:  {{$user->email}}
        </li>
    </ul>

    <form action="{{route('users.destroy',$user->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button onclick="alert('Tem certeza que deseja excluir?')" type="submit" >
                
           Excluir
        </button>
    </form>
@endsection


    