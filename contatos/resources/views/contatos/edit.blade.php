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
                    <form action="{{route('contatos.update', $contato)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <label for="nome">Nome</label><br>
                    <input type="text" name="nome" id="nome" value="{{$contato->nome}}"><br>
                    <label for="email">Email</label><br>
                    <input type="text" name="email" id="email" value="{{$contato->email}}"><br>
                    <label for="telefone">Telefone</label><br>
                    <input type="text" name="telefone" id="telefone" value="{{$contato->telefone}}"><br>
                    <label for="cidade">Cidade</label><br>
                    <input type="text" name="cidade" id="cidade" value="{{$contato->cidade}}"><br>
                    <label for="estado">Estado</label><br>
                    <input type="text" name="estado" id="estado" value="{{$contato->estado}}"><br>
                    <br>
                    <button class="bg-green-700 hover:bg-green-900 text-white rounded px-6 py-2" type="submit">Alterar</button>
                    <button class="bg-red-700 hover:bg-red-900 text-white rounded px-6 py-2" href="{{url('contatos')}}">cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
