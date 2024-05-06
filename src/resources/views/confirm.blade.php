<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
                <h2>Confirm</h2>
            </div>
            <form action="/thanks" method="post">
            @csrf
                <div>
                    <table>
                        <tr>
                            <th>お名前</th>
                            <td>
                                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                            </td>
                        </tr>
                        <tr>
                            <th>性別</th>
                            <td>
                                <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly />
                                @switch($contact['gender'])
                                @case(1)
                                <p>男性</p>
                                @break
                                @case(2)
                                <p>女性</p>
                                @break
                                @case(3)
                                <p>その他</p>
                                @break
                                @endswitch
                            </td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>
                                <input type="tel" name="tell" value="{{ $contact['tell1'] . $contact['tell2'] . $contact['tell3'] }}" readonly />
                            </td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td>
                                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                            </td>
                        </tr>
                        <tr>
                            <th>建物名</th>
                            <td>
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                            </td>
                        </tr>
                        <tr>
                            <th>お問い合わせの種類</th>
                            <td>
                                <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                                {{ $item['content'] }}
                            </td>
                        </tr>
                        <tr>
                            <th>お問い合わせ内容</th>
                            <td>
                                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <button>送信</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>