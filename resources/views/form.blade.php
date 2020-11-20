<style>
    body {
        background-color: #0ed145;
        text-align: center;
    }

</style>

<form action="/form" method="POST" novalidate>
    @csrf

    <html lang="ja">

    <head>
        <title>form</title>
    </head>

    <body>
        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
            性別を選択してください
        </div>
        <div>
            <input type="radio" name="gender" value="male">男性
            <input type="radio" name="gender" value="female">女性<br>
        </div>
        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
            年齢を入力してください
        </div>
        <div>
            (満：
            <input type="text" size="3" name="old"> 歳)
        </div>

    </body>

    </html>
</form>
