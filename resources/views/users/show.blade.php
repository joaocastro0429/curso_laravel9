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

    
@endsection


