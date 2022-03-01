<x-layout>
    <x-slot:title>
        新規登録 - Laravel9BlogApp
    </x-slot>

    <h1>新規登録ページ</h1>
    <form method="POST" action="{{ route('signup') }}">
        @csrf
        <dl>
            <dt><label for="name">名前</label></dt>
            <dd><input type="text" name="name" id="name" placeholder="名前" value="{{ old('name') }}"></dd>
            @error('name')
                <p class="error-msg">{{ $message }}</p>
            @enderror
            <dt><label for="email">メールアドレス</label></dt>
            <dd><input type="email" name="email" id="email" value="{{ old('email') }}"></dd>
            @error('email')
                <p class="error-msg">{{ $message }}</p>
            @enderror
            <dt><label for="password">パスワード</label></dt>
            <dd><input type="password" name="password" id="password"></dd>
            @error('password')
                <p class="error-msg">{{ $message }}</p>
            @enderror
            <dt><label for="password_confirmation">パスワード確認</label></dt>
            <dd><input type="password" name="password_confirmation" id="password_confirmation"></dd>
        </dl>
        <button type="submit">登録する</button>
    </form>
</x-layout>
