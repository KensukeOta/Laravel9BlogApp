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

    <ul>
        @forelse ($posts as $post)
            <li class="border p-2">
                <a href="{{ route('posts.show', $post->id) }}" class="font-bold">
                    {{ $post->title }}
                </a>
                <section class="flex justify-between">
                    <p>by {{ $post->user->name }}</p>
                    @if (Auth::id() === $post->user_id)
                        <a href="{{ route('posts.edit', $post->id) }}">編集</a>
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @method('DELETE')
                            @csrf

                            <button class="border-none text-red-500">削除</button>
                        </form>
                    @endif
                </section>
            </li>
        @empty
            <p>記事がありません</p>
        @endforelse
    </ul>
</x-layout>
