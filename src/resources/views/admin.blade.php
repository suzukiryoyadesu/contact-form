<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header>
        <div>
            <h1>FashionablyLate</h1>
            <a href=""><button>logout</button></a>
        </div>
    </header>

    <main>
        <div>
            <div>
                <h2>Admin</h2>
            </div>
            <div>
                <form action="">
                    <div>
                        <div>
                            <input type="text">
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                        </div>
                        <div>
                            <button>検索</button>
                            <button>リセット</button>
                        </div>
                    </div>
                </form>
                <div>
                    <button>エクスポート</button>
                    <!--{{ $contacts->links() }}-->
                </div>
            </div>
            <div>
                <table>
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>詳細</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>