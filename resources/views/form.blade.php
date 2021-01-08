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
    <script type="text/javascript">
    function marryChange(){
        radio = document.getElementsByName('married')
        if(radio[0].checked){
            document.getElementById('firstBox').style.display = "";
        }else{
            document.getElementById('firstBox').style.display = "none";
        }
    }
    </script>
    <body class="body" onload = "marryChange();">
        <h2>入力フォーム</h2>
        <div class="form-group">
                <div
                    style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
                    性別を選択してください
                </div>
                <div class="custom-control custom-radio">
                    <input id="gender" type="radio" name="gender" value="male">男性
                    <input id="gender" type="radio" name="gender" value="female">女性<br>
                </div>
                <div
                    style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
                    年齢を入力してください
                </div>
                <div>
                    満：
                    <input id="old" type="number" size="3" min="0" name="old"> 歳
                </div>
                <div
                    style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
                    現在の収入を入力してください
                </div>
                <div>
                    <input id="income" type="text" size="5" name="income"> 円
                    <script>
                        //実行時
                        function addFigure(syunyu) {
                            //空の場合
                            if (syunyu == "") {
                                return "";
                            }

                            numVal = syunyu.toString(), replace(/,/g, "").trim();
                            //数値でない場合
                            if (!/^[+|-]?(\d*)(\.\d+)?$/.test(syunyu)) {
                                return syunyu;
                            }
                            //整数と少数に分割
                            var numData = syunyu.tuString().split('.');
                            //3行カンマ
                            numData[0] = Number(numData[0]).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                            //小数部と結合
                            return numData.join('.');
                        }

                        function delFigure(strVal) {
                            return strVal.replace(/g,/g, "");
                        }
                        val elm = document.getElementById('income');
                        elm.addEventListener('blur', function() {
                            this.value = addFigure(this.value)
                        }, false);
                        elm.addEventListener('focus', function() {
                            this.value = delFigure(this.value)
                        }.false);

                    </script>
                </div>
                <div
                    style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
                    結婚はしていますか？
                </div>
                    <form name="Sample3_form" action="idomu_sample.html">
                        <input id="myes" name="married" type="radio" value="している" onclick="marryChange();"/>している<br>
                        <input id="mno" name="married" type="radio" value="していない" onclick="marryChange();"/>していない<br>
                    </form>
                    <div style =
                                    "background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;" >
                                    結婚した年はいつですか？
                                    </div>
                                    <select name = "year">
                                    <option value = "2021"> 2021年 </option>
                                    <option value = "2020"> 2020年 </option>
                                    <option value = "2019"> 2019年 </option>
                                    <option value = "2018"> 2018年 </option>
                                    <option value = "2017"> 2017年 </option>
                                    <option value = "2016"> 2016年 </option>
                                    <option value = "2015"> 2015年 </option>
                                    <option value = "2014"> 2014年 </option>
                                    <option value = "2013"> 2013年 </option>
                                    <option value = "2012"> 2012年 </option>
                                    <option value = "2011"> 2011年 </option>
                                    <option value = "2010"> 2010年 </option>
                                    <option value = "2009"> 2009年 </option>
                                    <option value = "2008"> 2008年 </option>
                                    <option value = "2007"> 2007年 </option>
                                    <option value = "2006"> 2006年 </option>
                                    <option value = "2005"> 2005年 </option>
                                    <option value = "2004"> 2004年 </option>
                                    <option value = "2003"> 2003年 </option>
                                    <option value = "2002"> 2002年 </option>
                                    <option value = "2001"> 2001年 </option>
                                    <option value = "2000"> 2000年 </option>
                                    <option value = "1999"> 1999年 </option>
                                    <option value = "1998"> 1998年 </option>
                                    <option value = "1997"> 1997年 </option>
                                    <option value = "1996"> 1996年 </option>
                                    <option value = "1995"> 1995年 </option>
                                    </select>

                                    <div style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
                                        配偶者の年齢を入力してください。
                                    </div>
                                    <div>満:
                                        <input id="old" type="number" size="3" min="0" name="old">歳
                                    </div>

                                    {{--してないとき--}}
                                    <div style="background-color:#e0ffff; padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
                                        結婚の予定はありますか？
                                    </div>
                                    <form name="Sample3_form" action="idomu_sample.html">
                                        <input id="pyes" name="pmarried" type="radio" value="ある" onclick="pmarryChange();"/>ある<br>
                                        <input id="pno" name="pmarried" type="radio" value="ない" onclick="pmarryChange();"/>ない<br>
                                    </form>

            </div>
        </div>
    </body>

    </html>
</form>
