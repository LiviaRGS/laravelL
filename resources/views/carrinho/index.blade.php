<x-app-layout>
    <x-slot name="header">More actions
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Carrinho
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     @if(count($carrinho) > 0)
                        @foreach ($carrinho as $id => $produto)
                            <div style = "border:1px dashed red; padding:2px">
                                {{ $produto['nome'] }}
                                <br/>
                                {{ $produto['preco'] }}
                                <br/>
                                {{ $produto['descricao'] }}
                                <br/>
                                <img src="{{ asset("storage/".$produto['imagem']) }}" alt="Imagem"/>
                                <br/>
                                {{ $produto['quantidade'] }}
                                <br/>
                                <a href = "{{ route('carrinho.remover',$id) }}">Remover item</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>