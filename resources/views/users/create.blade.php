@extends('layouts.app')

@section('title','Pagina de novo usuario')

@section('content')
<h1>Novo usuário</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach

        </ul>
    <div>
@endif

<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" placeholder="Infome  seu nome" name="name" value="{{old('name')}}">
    {{-- O oldmétodo extrairá os dados de entrada atualizados anteriormente da sessão : --}}
    <input type="email" placeholder="Informe seu email" name="email" value="{{old('email')}}">
    <input type="password" placeholder="senha" name="password"{{old('password')}}>
    <button type="submit">Enviar</button>

</form>
@endsection

