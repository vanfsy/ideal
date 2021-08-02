<html class="supernova isEmbeded">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Ideal Company Method 【アンケート】 回答入力 | Ideal Company Method</title>
    <link href="https://ic-method.com/ICM/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta property="og:title" content="Ideal Company Method® 回答フォーム">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Ideal Company Method® 回答フォーム">
    <meta property="og:description" content="このアンケートは、23問の「選択方式アンケート」に回答頂くことで、職場環境の改善点を発見し、理想的な職場環境の実現に役立てるためのものです。

●「職場」以外の組織（家族、チームその他グループ）の場合は、ご自身の状況に応じて質問文を読みかえ、ご回答下さい。
●あなた自身が職場のリーダーである場合は、「自分の組織はおそらくこのような状態だろう」という想定でお答え下さい。

回答数字には以下の意味があります。

1:全くあてはまらない
2:あまりあてはまらない
3:どちらとも言えない
4:あてはまる
5:とてもあてはまる

回答を変更したい場合は、変更先をクリックしてください。
">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body style="">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Ideal Company Method</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>
<div class="container">

    <div>
        <h3>Ideal Company Method 【アンケート】</h3>
        <p class="pageTitle fontBold">回答入力</p>

        <p>このアンケートは、23問の「選択方式アンケート」に回答頂くことで、職場環境の改善点を発見し、働きやすくまた働きがいのある理想的な職場の実現に役立てるためのものです。<br>
            今の職場における生活を振り返って、質問に対しての自分の気持ちに近い数字を一つ選択してください。</p>
        <p>このアンケートは「理想の職場環境づくり」のためのものであり、人事評価・その他の目的での利用は一切ありません。<br>
            そのため、安心して、思うこと、普段感じていることを「本音」でお答え下さい。</p>

        <p>※「職場」以外の組織（家族、チームその他グループ）の場合は、ご自身の状況に応じて質問文を読みかえ、ご回答下さい。<br>
            ※あなた自身が職場のリーダーである場合は、「自分の組織はおそらくこのような状態だろう」という想定でお答え下さい。
        </p>

        <hr>

        <form action="{{ route('answerPost') }}" method="post" name="answer" id="answer">
            @csrf
            <div>
                <p>※回答の数字には、次のような意味があります。</p>
                <p>5：とてもそう思う、とてもある</p>
                <p>4：少しそう思う、ときどきある</p>
                <p>3：どちらともいえない、普通である</p>
                <p>2：あまりそう思わない、あまりない</p>
                <p>1：全くそう思わない、全くない</p>
            </div>

            <hr>

            @if(!$errors->isEmpty())
                <div class="pageMessage">
                    <ul><li class="fontBold fontRed">すべての項目をご入力下さい（所属部門がない場合は、なしとご入力下さい）</li></ul>
                </div>
            @endif

{{--            <p class="textInd fontBold fontRed">すべての項目をご入力下さい（所属部門がない場合は、なしとご入力下さい）</p>--}}

            <div class="form-horizontal center-block formBox">
                <div class="form-group form-group-with-label">
                    <label>お名前</label>
                    <span>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $data['name']) }}" id="name"/>
                        <div class="formErrors">
                            @if($errors->has('name'))
                                <ul><li>{{ $errors->first('name') }}</li></ul>
                            @endif
                        </div>
                    </span>

                </div>


                <div class="form-group form-group-with-label">
                    <label>性別</label>
                    <span>
                        <label class="radio-inline"><input type="radio" name="gender" value="0" @if(old('gender', $data['gender']) == 0) checked @endif>男</label>
                        <label class="radio-inline"><input type="radio" name="gender" value="1" @if(old('gender', $data['gender']) == 1) checked @endif>女</label>
                        <div class="formErrors">
                            @if($errors->has('gender'))
                                <ul><li>{{ $errors->first('gender') }}</li></ul>
                            @endif
                        </div>
                    </span>

                </div>

                <div class="form-group form-group-with-label">
                    <label>所属部門</label>
                    <span>
                        <input type="text" name="branch" class="form-control" value="{{ old('branch', $data['branch']) }}"/>

                        <p>※所属部門は御社でご指定の名称を正しくご記載下さい</p>
                        <div class="formErrors">
                            @if($errors->has('branch'))
                                <ul><li>{{ $errors->first('branch') }}</li></ul>
                            @endif
                        </div>
                    </span>


                </div>

            </div>

            <hr>



            <div class="form-horizontal center-block formBox">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label" for="enqAns">&nbsp;</label>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">←そう思う&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;そう思わない→</div>
                </div>

                @foreach($anketos as $key => $anketo)
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-6 col-md-6 col-lg-6 control-label textLeft" for="enqAns">Q<?= $anketo->id ?>．<?= $anketo->question ?></label>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <label class="radio-inline"><input type="radio" name="anketo[<?= $anketo->id ?>]" value="5" @if(old('anketo.' . $anketo->id, $data['anketo'][$anketo->id]) == 5) checked @endif>5</label>
                            <label class="radio-inline"><input type="radio" name="anketo[<?= $anketo->id ?>]" value="4" @if(old('anketo.' . $anketo->id, $data['anketo'][$anketo->id]) == 4) checked @endif>4</label>
                            <label class="radio-inline"><input type="radio" name="anketo[<?= $anketo->id ?>]" value="3" @if(old('anketo.' . $anketo->id, $data['anketo'][$anketo->id]) == 3) checked @endif>3</label>
                            <label class="radio-inline"><input type="radio" name="anketo[<?= $anketo->id ?>]" value="2" @if(old('anketo.' . $anketo->id, $data['anketo'][$anketo->id]) == 2) checked @endif>2</label>
                            <label class="radio-inline"><input type="radio" name="anketo[<?= $anketo->id ?>]" value="1" @if(old('anketo.' . $anketo->id, $data['anketo'][$anketo->id]) == 1) checked @endif>1</label>
                            <div class="formErrors">
                                @if($errors->has('anketo.' . $anketo->id))
                                <ul><li>{{ $errors->first('anketo.' . $anketo->id) }}</li></ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="text-center"><input type="submit" name="submit" id="submitbutton" class="btn btn-warning" value="確認"></div>
            </div>

        </form>
    </div>
    <hr>
    <footer>
{{--        <p class="text-center">© 2016 - 2021 Plug-Factory. All rights reserved.</p>--}}
    </footer>
</div> <!-- /container -->


</body>

</html>