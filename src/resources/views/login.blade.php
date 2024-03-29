<x-layout>
    <x-slot:title>
        ログイン - Laravel9BlogApp
    </x-slot>

    <h1>ログインページ</h1>
    <form method="POST" action="{{ route('authenticate') }}">
        @csrf
        <dl>
            <dt><label for="email">メールアドレス</label></dt>
            <dd><input type="email" name="email" id="email" placeholder="メールアドレス" value="{{ old('email') }}"></dd>
            @error('email')
                <p class="error-msg">{{ $message }}</p>
            @enderror
            <dt><label for="password">パスワード</label></dt>
            <dd><input type="password" name="password" id="password" placeholder="パスワード"></dd>
            @error('password')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </dl>
        <button type="submit">ログイン</button>
    </form>
</x-layout>
