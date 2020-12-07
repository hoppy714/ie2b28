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
            <input id ="old" type="number" size="3" min="0" name="old"> 歳)
        </div>
        <div style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
            現在の収入を入力してください
        </div>
        <div>
            <input id = "income" type="text" size="5" name="income" data-type="syunyu"> 円
            <script>
                //実行時
                function addFigure(syunyu){
                    //空の場合
                    if(syunyu == ""){
                        return "";
                    }

                    numVal = syunyu.toString(),replace(/,/g,"").trim();
                    //数値でない場合
                    if(!/^[+|-]?(\d*)(\.\d+)?$/.test(syunyu)){
                        return syunyu;
                    }
                    //整数と少数に分割
                    var numData = syunyu.tuString().split('.');
                    //3行カンマ
                    numData[0] = Number(numData[0]).toString().replace(/\B(?=(\d{3})+(?!\d))/g,',');
                    //小数部と結合
                    return numData.join('.');
                }
                function delFigure(strVal){
                    return strVal.replace(/g,/g,"");
                }

                val elm = document.getElementById('numdata');
                elm.addEventListener('blur',function(){this.value = addFigure(this.value)},false);
                elm.addEventListener('focus',function(){this.value = delFigure(this.value)}.false);
            </script>
        </div>
        <div style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
            結婚はしていますか？
        </div>

          <body>
          <form name="Sample3_form" action="idomu_sample.html">
          <input id="myes" name="married" type="radio" value = "している" onclick=marry()/>している<br>
          <input id="mno" name="married"  type="radio" value = "していない" onclick=marry()/>していない<br>
          </form>
          </body>
        <script src="public/js/reel.js"></script>
    </body>

    </html>
</form>
