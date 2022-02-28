<x-layout>
    <x-slot:title>
        トップページ - Laravel9 BlogApp
    </x-slot>
    <h1>トップページ</h1>
    @if (Auth::check())
    <p>{{ Auth::user()->name }}</p>
    @else
    <p>stranger</p>
    @endif
</x-layout>
