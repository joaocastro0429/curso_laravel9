
@extends('layouts.app')

@section('title','Pagina de cadastro')

@section('content')

<h1  class="text-2xl font-semibold leading-tigh py-2">
    Listagem de Usuário
    <a href="{{route('')}}" class="bg-blue-900 rounded-full text-white px-4 text-sm">{+}</a>
</h1>
  <form action="{{route('users.index')}}" method="get">
  <input type="text" name="name" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">

  <button type="submit" name="search" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >Pesquisar</button>
</form>



<ul>
  <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
      <thead>
          <tr>
            <th
              class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
              Nome
            </th>
            <th
              class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
              E-mail
            </th>
            <th
              class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
              Editar
            </th>
            <th
              class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
            >
              Detalhes
            </th>
            <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Upload
          </th>
          </tr>
        </thead>
        <tbody>
      @foreach ($files as $file)
      
          <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                @if ($users->image)
                <img src="{{ url("storage/{$file->image}") }}" alt="{{ $file->name }}" class="object-cover w-20">
                @else
                <img src="{{ url("public/favicon.ico") }}" alt="{{ $file->name }}" class="object-cover w-20">
                  
                @endif
              {{ $users->name }}</td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $file->email }}</td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <a href="{{ route('users.edit', $file->id) }}" class="bg-green-200 rounded-full py-2 px-6">Editar</a>
              </td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <a href="{{ route('users.show', $file->id) }}" class="bg-orange-200 rounded-full py-2 px-6">Detalhes</a>
              </td>
          </tr>
      @endforeach
  </ul>
      </tbody>
  </table>
  @endsection