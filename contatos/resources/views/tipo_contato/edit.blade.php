<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar contato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('tipo_contato.update', $tipo_contato)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <label for="nome">Nome</label><br>
                    <input type="text" name="nome" id="nome" value="{{$tipo_contato->nome}}"><br>
                    <label for="descricao">Descricao</label><br>
                    <input type="text" name="descricao" id="descricao" value="{{$tipo_contato->descricao}}"><br>
                    <br>
                    <button class="bg-green-700 hover:bg-green-900 text-white rounded px-6 py-2" type="submit">Alterar</button>
                    <button class="bg-red-700 hover:bg-red-900 text-white rounded px-6 py-2" href="{{url('tipo_contato')}}">cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
