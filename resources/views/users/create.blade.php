@extends('layouts.app')

@section('title','Pagina de novo usuario')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Novo usuário</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach

        </ul>
    <div>
@endif
<div class="w-full bg-white shadow-md rounded px-8 py-12">

<form action="{{route('users.store')}}" method="post"  enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Infome  seu nome" name="name" value="{{old('name')}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    {{-- O old método extrairá os dados de entrada atualizados anteriormente da sessão : --}}
    <input type="email" placeholder="Informe seu email" name="email" value="{{old('email')}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="password" placeholder="senha" name="password"{{old('password')}} class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="file" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Enviar</button>

</form>
@endsection
