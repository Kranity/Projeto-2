@extends('templates.adminTemplate')

@section("titulo", "Admin - Funcionários")

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
                    <a href="{{route('cadastrar.funcionario.pagina')}}"><input class="input-center btn btn-dark" type="submit" value="Sistema de Cadastro"/></a>
                    <div class="m-auto">
                        <h2 class="h2-center">Lista de Funcionários</h2>
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>Empresa</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th colspan="2">Extra</th>
                                </tr>
                            </thead>
                            @foreach ($funcionarios as $funcionario)
                                <tbody>
                                    <tr>
                                        <td>{{$funcionario->nome}}</td>
                                        <td>{{$funcionario->sobrenome}}</td>
                                        <td>{{$funcionario->empresa}}</td>
                                        <td>{{$funcionario->email}}</td>
                                        <td>{{$funcionario->telefone}}</td>
                                        <td><a class="btn btn-success" href="{{route('editar.funcionario.pagina', $funcionario->id)}}">Editar</a></td>
                                        <td><a class="btn btn-danger" href="{{route('excluir.funcionario', $funcionario->id)}}">Excluir</a></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {!!$funcionarios->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
