
@extends('layouts.app')

@section('title','Pagina de cadastro')

@section('content')

<h1>
    Listagem de Usuário
    <a href="{{route('users.create')}}">{+}</a>
</h1>

<form action="{{route('users.index')}}" method="get">
  <input type="text" name="seach" placeholder="Pesquisar">
  <button type="submit">Pesquisar</button>
</form>

@foreach ($users as $user)

  <ul>
    <li>
        {{$user->name}} 
        {{$user->email}} 

        |<a href="{{route('users.edit',$user->id)}}">|Editar</a> 

        <a href="{{route('users.show',$user->id)}}">|Detalhes</a> 

     
    </li>
    
  </ul>
  @endforeach
    
@endsection

    
