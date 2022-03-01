<x-layout>
    <x-slot:title>
        記事編集フォーム - Laravel9 BlogApp
    </x-slot>

    <h1>記事編集フォーム</h1>

    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @method('PATCH')
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <dl>
            <dt><label for="title">タイトル</label></dt>
            <dd><input type="text" name="title" id="title" placeholder="タイトル" value="{{ old('title', $post->title) }}"></dd>
            @error('title')
                <p class="error-msg">{{ $message }}</p>
            @enderror
            <dt><label for="body">本文</label></dt>
            <dd><textarea name="body" id="body" cols="30" rows="10">{{ old('body', $post->body) }}</textarea></dd>
            @error('body')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </dl>
        <button type="submit">更新する</button>
    </form>
</x-layout>
