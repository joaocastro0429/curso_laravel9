@extends('layouts.app')

@section('title','Pagina de novo usuario')

@section('content')
<h1>Novo usuário</h1>

<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" placeholder="Infome  seu nome" name="name">
    <input type="email" placeholder="Informe seu emai" name="email">
    <input type="password" placeholder="senha" name="password">
    <button type="submit">Enviar</button>

</form>
@endsection

