<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header>
        <div>
            <h1>FashionablyLate</h1>
        </div>
    </header>

    <main>
        <div>
            <div>
                <h2>contact</h2>
            </div>
            <form action="/confirm" method="post">
                @csrf
                <div>
                    <div>
                        <span>お名前</span>
                        <span>※</span>
                    </div>
                    <div>
                        <div>
                            <input type="text" name="first_name" placeholder="例:山田">
                            <input type="text" name="last_name" placeholder="例:太郎">
                        </div>
                        <div>
                            @if ($errors->has('first_name'))
                            {{ $errors->first('first_name') }}
                            @elseif ($errors->has('last_name'))
                            {{ $errors->first('last_name') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <span>性別</span>
                        <span>※</span>
                    </div>
                    <div>
                        <div>
                            <input type="radio" name="gender" value="1" checked>男性
                            <input type="radio" name="gender" value="2">女性
                            <input type="radio" name="gender" value="3">その他
                        </div>
                        <div>
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <span>メールアドレス</span>
                        <span>※</span>
                    </div>
                    <div>
                        <div>
                            <input type="email" name="email" placeholder="例:test@example.com">
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
                        <span>電話番号</span>
                        <span>※</span>
                    </div>
                    <div>
                        <div>
                            <input type="tel" name="tell1" placeholder="080">
                            -
                            <input type="tel" name="tell2" placeholder="1234">
                            -
                            <input type="tel" name="tell3" placeholder="5678">
                        </div>
                        <div>
                            @if ($errors->has('tell1'))
                            {{ $errors->first('tell1') }}
                            @elseif ($errors->has('tell2'))
                            {{ $errors->first('tell2') }}
                            @elseif ($errors->has('tell3'))
                            {{ $errors->first('tell3') }}
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <span>住所</span>
                        <span>※</span>
                    </div>
                    <div>
                        <div>
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                        </div>
                        <div>
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <span>建物名</span>
                    </div>
                    <div>
                        <div>
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <span>お問い合わせの種類</span>
                        <span>※</span>
                    </div>
                    <div>
                        <div>
                            <select name="category_id">
                                <option value="">選択してください</option>
                                @foreach($categories as $category)
                                <option value=" {{ $category['id'] }}">{{ $category['content'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            @error('category_id')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <span>お問い合わせ内容</span>
                        <span>※</span>
                    </div>
                    <div>
                        <div>
                            <input type="text" name="detail" placeholder="お問い合わせ内容をご記載ください">
                        </div>
                        <div>
                            @error('detail')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>