<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contato - '.$contato->nome) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-bold text-lg">Nome</h2>
                    <p>{{$contato->nome}}</p>
                    <h2 class="font-bold text-lg">Email</h2>
                    <p>{{$contato->email}}</p>
                    <h2 class="font-bold text-lg">Telefone</h2>
                    <p>{{$contato->telefone}}</p>
                    <h2 class="font-bold text-lg">Cidade</h2>
                    <p>{{$contato->cidade}}</p>
                    <h2 class="font-bold text-lg">Estado</h2>
                    <p>{{$contato->estado}}</p>
                    <br>
                    <a class="bg-blue-700 hover:bg-blue-900 text-white rounded px-6 py-2" href="{{url('contatos')}}">voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
