@extends('templates.modificarTemplate')

@section('titulo', 'Cadastrar - Funcionário')

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
                    <h2 class='h2-center'>CADASTRAR FUNCIONÁRIO</h2>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form class='form-center' action="{{route('cadastrar.funcionario')}}" method='POST'>
                        @csrf
                        <input class='input-center' name='nome' placeholder='Nome' value="{{old('nome')}}" autocomplete='off'/>
                        <input class='input-center' name='sobrenome' placeholder='Sobrenome' value="{{old('sobrenome')}}" autocomplete='off'/>
                        <select class='input-center' name='empresa'>
                            <option disabled selected>Qual empresa?</option>
                            @foreach ($empresas as $empresa)
                                <option >{{$empresa->nome}}</option>
                            @endforeach
                            <option value="">Não possui uma empresa</option>
                        <select>
                        <input class='input-center' name='email' placeholder='E-mail' value="{{old('email')}}" autocomplete='off'/>
                        <input class='input-center' name='telefone' placeholder='Telefone' value="{{old('telefone')}}" autocomplete='off'/>
                        <button class='input-center btn btn-success' type='submit' name='cadastrar'>Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>