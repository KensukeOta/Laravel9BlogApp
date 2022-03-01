<x-layout>
    <x-slot:title>
        {{ $post->title }} - Laravel9 BlogApp
    </x-slot>

    <h1 class="font-bold">{{ $post->title }}</h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
</x-layout>
