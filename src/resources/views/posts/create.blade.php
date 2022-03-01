<x-layout>
    <x-slot:title>
        記事投稿フォーム - Laravel9 BlogApp
    </x-slot>

    <h1>記事投稿フォーム</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <dl>
            <dt><label for="title">タイトル</label></dt>
            <dd><input type="text" name="title" id="title" placeholder="タイトル" value="{{ old('title') }}"></dd>
            @error('title')
                <p class="error-msg">{{ $message }}</p>
            @enderror
            <dt><label for="body">本文</label></dt>
            <dd><textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea></dd>
            @error('body')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </dl>
        <button type="submit">投稿する</button>
    </form>
</x-layout>
