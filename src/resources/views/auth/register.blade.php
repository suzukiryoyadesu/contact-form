<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header>
        <div>
            <h1>FashionablyLate</h1>
            <a href="/login"><button>login</button></a>
        </div>
    </header>

    <main>
        <div>
            <div>
                <h2>Register</h2>
            </div>
            <div>
                <form action="/register" method="post">
                @csrf
                    <div>
                        <div>
                            <span>お名前</span>
                        </div>
                        <div>
                            <div>
                                <input type="text" name="name" />
                            </div>
                            <div>
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
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
                        <button type="submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>