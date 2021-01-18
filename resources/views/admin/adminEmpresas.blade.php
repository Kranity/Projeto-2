@extends('templates.adminTemplate')

@section("titulo", "Admin - Empresas")

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel de Controle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('cadastrar.empresa.pagina')}}"><input class="input-center btn btn-dark" type="submit" value="Sistema de Cadastro"/></a>
                    <div class="m-auto">
                        <h2 class="h2-center">Lista de Empresas</h2>
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Logotipo</th>
                                    <th>Site</th>
                                    <th colspan="2">Extra</th>
                                </tr>
                            </thead>
                            @foreach ($empresas as $empresa)
                                <tbody>
                                    <tr>
                                        <td>{{$empresa->nome}}</td>
                                        <td>{{$empresa->email}}</td>
                                        <td>{{$empresa->logotipo}}</td>
                                        <td>{{$empresa->website}}</td>
                                        <td><a class="btn btn-success" href="{{route('editar.empresa.pagina', $empresa->id)}}">Editar</a></td>
                                        <td><a class="btn btn-danger" href="{{route('excluir.empresa', $empresa->id)}}">Excluir</a></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {!!$empresas->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
