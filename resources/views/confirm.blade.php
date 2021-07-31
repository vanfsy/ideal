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
            <a class="navbar-brand" href="/"><img src="https://ic-method.com/ICM/" alt="">&nbsp;Ideal Company Method</a>
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
        <p class="pageTitle fontBold">回答入力 &gt; 入力内容確認</p>

        <p>デザイナーズカンパニー&nbsp;&nbsp;様</p>
        <p>&nbsp;</p>

        <div class="form-horizontal center-block formBox">
            <div class="form-group">
                <label class="col-xs-12 col-sm-7 col-md-7 col-lg-7 control-label textLeft" for="enqAns">お名前</label>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <?= $data['name'] ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-12 col-sm-7 col-md-7 col-lg-7 control-label textLeft" for="enqAns">性別</label>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <?= $data['gender'] == 1 ? '女' : '男' ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-12 col-sm-7 col-md-7 col-lg-7 control-label textLeft" for="enqAns">所属部門</label>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <?= $data['branch'] ?>
                </div>
            </div>

            <hr>

            @foreach($anketos as $key => $anketo)
                <div class="form-group">
                    <label class="col-xs-12 col-sm-7 col-md-7 col-lg-7 control-label textLeft" for="enqAns">Q<?= $anketo->id ?>．<?= $anketo->question ?></label>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <?= $answers[$data['anketo'][$anketo->id]] ?>
                    </div>
                </div>
            @endforeach
        </div>

        <form action="{{ route('answerSave') }}" method="post">
            @csrf
            <div class="text-center">
                <input type="submit" name="submit" id="submitbutton" class="btn btn-warning" value="この内容で回答する">&nbsp;&nbsp;
                <a href="{{ route('home') }}" class="btn btn-warning" >戻る</a>
            </div>
        </form></div>
    <hr>
    <footer>
        <p class="text-center">© 2016 - 2021 Plug-Factory. All rights reserved.</p>
    </footer>
</div> <!-- /container -->


</body>
</html>