<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <header>
        <div>
            <h1>FashionablyLate</h1>
            <a href="/register"><button>register</button></a>
        </div>
    </header>

    <main>
        <div>
            <div>
                <h2>Login</h2>
            </div>
            <div>
                <form action="/login" method="post">
                @csrf
                    <div>
                        <div>
                            <span>メールアドレス</span>
                        </div>
                        <div>
                            <div>
                                <input type="text" name="email" />
                            </div>
                            <div>
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span>パスワード</span>
                        </div>
                        <div>
                            <div>
                                <input type="password" name="password" />
                            </div>
                            <div class="form__error">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>