<x-layout>
    <x-slot:title>
        {{ $post->title }} - Laravel9 BlogApp
    </x-slot>

    <h1 class="font-bold">{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
</x-layout>
