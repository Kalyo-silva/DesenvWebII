<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo contato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('contatos.store')}}" method="POST">
                    @csrf
                    <label for="nome">Nome</label><br>
                    <input type="text" name="nome" id="nome"><br>
                    <label for="email">Email</label><br>
                    <input type="text" name="email" id="email"><br>
                    <label for="telefone">Telefone</label><br>
                    <input type="text" name="telefone" id="telefone"><br>
                    <label for="cidade">Cidade</label><br>
                    <input type="text" name="cidade" id="cidade"><br>
                    <label for="estado">Estado</label><br>
                    <input type="text" name="estado" id="estado"><br>
                    <br>
                    <button class="bg-green-700 hover:bg-green-900 text-white rounded px-6 py-2" type="submit">Cadastrar</button>
                    <button class="bg-red-700 hover:bg-red-900 text-white rounded px-6 py-2" type="reset">Limpar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
