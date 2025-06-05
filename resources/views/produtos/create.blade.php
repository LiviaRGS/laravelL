<x-app-layout>
    <x-slot name = "header">
        <h2 class = "font-semibold text-xel text-gray-800 dark:text-gray-200 leading-tight">Produtos &raquo; criar</h2>
        <form action="">
            @csrf
            <div>
            <x-input-label for="name" :value="name" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        </form>
    </x-slot>
</x-app-layout>