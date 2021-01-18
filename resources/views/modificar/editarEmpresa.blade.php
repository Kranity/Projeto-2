@extends('templates.modificarTemplate')

@section('titulo', 'Editar - Empresa')

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
                    <h2 class='h2-center'>EDITAR EMPRESA</h2>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form class='form-center' method='POST' action="{{route('editar.empresa', ['id' => $empresa->id])}}" enctype="multipart/form-data">
                        @csrf
                        <input class='input-center' name='nome' value='{{$empresa->nome ?? ""}}' placeholder='Nome' autocomplete='off' required/>
                        <input class='input-center' name='email' value='{{$empresa->email ?? ""}}' placeholder='E-mail' autocomplete='off'/>
                        <input class='input-center' type='file' name='logotipo' value='{{$empresa->logotipo ?? ""}}' placeholder='Logotipo' autocomplete='off'/>
                        <input class='input-center' name='website' value='{{$empresa->website ?? ""}}' placeholder='Site' autocomplete='off'/>
                        <button class='input-center btn btn-success' type='submit' name='editar'>Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
