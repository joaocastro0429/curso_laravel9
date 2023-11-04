@extends('layouts.app')

@section('title','Pagina de edição')

@section('content')
<h1>Editar Usuário - {{$user->id}}</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach

        </ul>
    <div>
@endif

<form action="{{route('users.update',$user->id)}}" method="post">
    @method('PUT')

    @csrf
    <input type="text" placeholder="Infome  seu nome" name="name" value="{{$user->name}}">
    <input type="email" placeholder="Informe seu email" name="email" value="{{$user->email}}">
    <input type="password" placeholder="senha" name="password">
    <button type="submit">Enviar</button>

</form>
@endsection

