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
        <div style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
            性別を選択してください
        </div>
        <div>
            <input id = "gender" type="radio" name="gender" value="male">男性
            <input id = "gender" type="radio" name="gender" value="female">女性<br>
        </div>
        <div style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
            年齢を入力してください
        </div>
        <div>
            (満：
            <input id ="old" type="number" size="3" name="old"> 歳)
        </div>
        <div style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
            現在の収入を入力してください
        </div>
        <div>
            <input id = "income" type="number" size="5" name="income"> 円
        </div>
        {{--<div style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
            結婚はしていますか？
        </div>

          <body>
          <form name="Sample3_form" action="idomu_sample.html">
          <input id="myes" name="married" type="radio" value = "している" onclick=marry()/>している<br>
          <input id="mno" name="married"  type="radio" value = "していない" onclick=marry()/>していない<br>
          </form>
          </body>
        <script src="public/js/reel.js"></script>
        --}}

        <script type="text/javascript" language="javascript">
            function onRadioButtonChange() {
              check1 = document.form1.Radio1.checked;
              check2 = document.form1.Radio2.checked;
              check3 = document.form1.Radio3.checked;

              target = document.getElementById("output");

              if (check1 == true) {
                target.innerHTML = "要素1がチェックされています。<br/>";
              }
              else if (check2 == true) {
                target.innerHTML = "要素2がチェックされています。<br/>";
              }
              else if (check3 == true) {
                target.innerHTML = "要素3がチェックされています。<br/>";
              }
            }
          </script>
    </body>

    </html>
</form>
