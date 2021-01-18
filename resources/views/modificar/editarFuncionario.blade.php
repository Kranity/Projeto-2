@extends('templates.modificarTemplate')

@section('titulo', 'Editar - Funcionário')

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
                    <h2 class='h2-center'>EDITAR FUNCIONÁRIO</h2>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form class='form-center' method='POST' action='{{route("editar.funcionario", ["id" => $funcionario->id])}}'>
                        @csrf
                        <input class='input-center' name='nome' value='{{$funcionario->nome ?? ""}}' placeholder='Nome' autocomplete='off' required/>
                        <input class='input-center' name='sobrenome' value='{{$funcionario->sobrenome ?? ""}}' placeholder='Sobrenome' autocomplete='off' required/>
                        <select class='input-center' name='empresa'>
                            @if ($funcionario->empresa == null)
                                <option disabled selected>Qual empresa?</option>
                            @else
                                <option disabled>Qual empresa?</option>
                                <option selected>{{$funcionario->empresa}}</option>
                            @endif
                            @foreach ($empresas as $empresa)
                                @if ($funcionario->empresa != $empresa->nome)
                                    <option>{{$empresa->nome}}</option>
                                @endif
                            @endforeach
                            <option value="">Não possui uma empresa</option>
                        <select>
                        <input class='input-center' name='email' value='{{$funcionario->email ?? ""}}' placeholder='E-mail' autocomplete='off'/>
                        <input class='input-center' name='telefone' value='{{$funcionario->telefone ?? ""}}' placeholder='Telefone' autocomplete='off'/>
                        <button class='input-center btn btn-success' type='submit' name='editar'>Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>