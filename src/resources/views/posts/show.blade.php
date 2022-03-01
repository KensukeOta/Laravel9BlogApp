<x-layout>
    <x-slot:title>
        {{ $post->title }} - Laravel9 BlogApp
    </x-slot>

    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br($post->body) !!}</p>
</x-layout>
