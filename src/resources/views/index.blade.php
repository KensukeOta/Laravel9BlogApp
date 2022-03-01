<x-layout>
    <x-slot:title>
        トップページ - Laravel9 BlogApp
    </x-slot>

    <h1>トップページ</h1>
    <p>Welcome!
    @if (Auth::check())
        {{ Auth::user()->name }}</p>
    @else
        stranger</p>
    @endif
    <nav class="text-center">
        <a href="{{ route('posts.create') }}" class="border inline-block">投稿する</a>
    </nav>
</x-layout>
