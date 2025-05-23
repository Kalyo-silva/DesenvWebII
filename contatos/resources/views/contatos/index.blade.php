<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contatos') }}
        </h2>
        
        <a href="{{url('contatos/create')}}"><button class="bg-blue-700 px-5 py-2 text-white rounded">Novo Contato</button></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Contatos") }}

                    @foreach ($contatos as $contato)
                        <div class="flex items-center">
                            <p>{{$contato->id}} - {{$contato->nome}}</p>
                            
                            <a href="{{url('contatos/'.$contato->id)}}" class="bg-blue-700 text-white hover:bg-blue-900 rounded px-2 py-1 mx-1 my-2">Ver</a>
                            <a href="{{url('contatos/'.$contato->id.'/edit')}}" class="bg-green-700 text-white hover:bg-green-900 rounded px-2 py-1 mx-1 my-2">Editar</a>
                            <form action="{{route('contatos.destroy', $contato->id)}}" method ="post">
                                @method('DELETE')
                                @csrf
                                <button type='submit' class="bg-red-700 text-white hover:bg-red-900 rounded px-2 py-1 mx-1 my-2">Deletar</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
