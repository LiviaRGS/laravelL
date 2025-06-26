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
                            <div style = "border:1px solid blue; padding:25px;border-radius: 10px; margin:10px; background-color: aliceblue;">
                                <b>Nome: </b>
                                {{ $produto['nome'] }}
                                <br/>
                                <b>Preço: </b>
                                {{ $produto['preco'] }}
                                <br/>
                                <b>Descrição: </b>
                                {{ $produto['descricao'] }}
                                <br/>
                                @if($produto['imagem'] != null)
                                <img src="{{ asset("storage/".$produto['imagem']) }}" alt="Imagem" width = "250" style = "border-radius:10px;background-color:white;"/> 
                                @endif
                                <br/>
                                <b>Quantidade: </b>
                                {{ $produto['quantidade'] }}
                                <br/>
                                <br/>
                                <a href = "{{ route('carrinho.remover',$id) }}" style = "background-color:black;color:white;border-radius:10px;padding:10px;">Remover item</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>