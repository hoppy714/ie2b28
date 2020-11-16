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
        <div>

            <input type="radio" name="gender" value="male">男性
            <input type="radio" name="gender" value="female">女性<br>
        </div>
            (満：
            <input type="text" size="3" name="old"> 歳)
    </body>

    </html>
</form>
