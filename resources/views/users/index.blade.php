
@extends('layouts.app')

@section('title','Pagina de cadastro')

@section('content')

<h1>
    Listagem de Usuário
    <a href="{{route('users.create')}}">{+}</a>
</h1>

@foreach ($users as $user)

  <ul>
    <li>
        {{$user->name}} -
        {{$user->email}} 

        <a href="{{route('users.show',$user->id)}}">|Detalhes</a>  
     
    </li>
    
  </ul>
  @endforeach
    
@endsection

    
