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

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body style="overflow-x: hidden;">
<form class="ideal-form" action="{{ route('answerPost') }}" method="post">
    @csrf
    <div role="main" class="form-all">
        <ul class="form-section page-section">
            <li class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-large">
                    <div class="header-text httal htvam">
                        <h1 class="form-header" data-component="header">
                            Ideal Company Method® 回答フォーム
                        </h1>
                        <div class="form-subHeader">
                            このアンケートは、23問の「選択方式アンケート」に回答頂くことで、職場環境の改善点を発見し、理想的な職場環境の実現に役立てるためのものです。<br><br>

                            ●「職場」以外の組織（家族、チームその他グループ）の場合は、ご自身の状況に応じて質問文を読みかえ、ご回答下さい。<br>
                            ●あなた自身が職場のリーダーである場合は、「自分の組織はおそらくこのような状態だろう」という想定でお答え下さい。<br><br>

                            回答数字には以下の意味があります。<br><br>

                            1:全くあてはまらない<br>
                            2:あまりあてはまらない<br>
                            3:どちらとも言えない<br>
                            4:あてはまる<br>
                            5:とてもあてはまる<br><br>

                            回答を変更したい場合は、変更先をクリックしてください。<br><br>
                            <span class="form-required">* 必須</span>
                        </div>


                    </div>

                    <div class="form-line jf-required form-subline @if($errors->has('email')) form-line-error @endif" data-type="control_email" style="padding-left: 0">
                        <label class="form-label form-label-top form-label-auto">
                            Email<span class="form-required">*</span>
                        </label>
                        <div class="form-input-wide jf-required ">
                            <input type="text" name="email" class="form-textbox" size="30" value="{{ old('email') }}"/>

                            @if($errors->has('email'))
                            <div class="form-error-message" role="alert">
                                <img src="https://cdn.jotfor.ms/images/exclamation-octagon.png">{{ $errors->first('email') }}
                                <div class="form-error-arrow">
                                    <div class="form-error-arrow-inner"></div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

            </li>


            <li class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-large">
                    <div class="header-text httal htvam">
                        <h3 class="form-header" data-component="header">
                            回答者情報
                        </h3>

                        <div class="form-subHeader">
                            以下の項目は、分析上必須項目になりますのでご了承下さい。
                        </div>


                    </div>

                    <div class="form-line form-subline @if($errors->has('gender') || $errors->has('gender_other')) form-line-error @endif">
                        <label class="form-label form-label-top"> 性別 </label>
                        <div class="form-input-wide">
                            <div class="form-single-column" role="group">
                                <span class="form-radio-item" style="clear:left">
                                    <span class="dragger-item"></span>
                                    <input type="radio" class="form-radio" id="input_gender_0" name="gender" value="0" @if(old('gender') == 0) checked @endif>
                                    <label for="input_gender_0"> 男 </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                    <span class="dragger-item"></span>
                                    <input type="radio" class="form-radio" id="input_gender_1" name="gender" value="1" @if(old('gender') == 1) checked @endif>
                                    <label for="input_gender_1"> 女 </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                    <span class="dragger-item"></span>
                                    <input type="radio" class="form-radio" id="input_gender_2" name="gender" value="2" @if(old('gender') == 2) checked @endif>
                                    <label for="input_gender_2"> Other:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gender_other" class="form-textbox" size="30" value="{{ old('gender_other') }}"></label>

                                </span>
                            </div>
                        </div>
                        @if($errors->has('gender') || $errors->has('gender_other'))
                        <div class="form-error-message" role="alert"><img src="https://cdn.jotfor.ms/images/exclamation-octagon.png"> {{ $errors->has('gender') ? $errors->first('gender') : $errors->first('gender_other') }}<div class="form-error-arrow"><div class="form-error-arrow-inner"></div></div></div>
                        @endif
                    </div>

                    <div class="form-line jf-required form-subline @if($errors->has('name')) form-line-error @endif" data-type="control_textbox" >
                        <label class="form-label form-label-top">
                            お名前
                            <span class="form-required">*</span>
                        </label>
                        <div class="form-input-wide jf-required">
                            <input type="text" name="name" class="form-textbox" size="30" value="{{ old('name') }}">
                            @if($errors->has('name'))
                                <div class="form-error-message" role="alert">
                                    <img src="https://cdn.jotfor.ms/images/exclamation-octagon.png">{{ $errors->first('name') }}
                                    <div class="form-error-arrow">
                                        <div class="form-error-arrow-inner"></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-line form-subline @if($errors->has('pref')) form-line-error @endif" data-type="control_textbox">
                        <label class="form-label form-label-top">
                            お住まいの都道府県
                        </label>
                        <div class="form-input-wide jf-required">
                            <input type="text" name="pref" data-type="input-textbox" class="form-textbox" size="30" value="{{ old('pref') }}">
                            @if($errors->has('pref'))
                                <div class="form-error-message" role="alert">
                                    <img src="https://cdn.jotfor.ms/images/exclamation-octagon.png">{{ $errors->first('pref') }}
                                    <div class="form-error-arrow">
                                        <div class="form-error-arrow-inner"></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </li>


            <li class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-large">
                    <div class="header-text httal htvam">
                        <h3 class="form-header" data-component="header">
                            アンケート
                        </h3>
                    </div>

                    @foreach($anketos as $key => $anketo)
                        <div class="form-line form-line-column form-col-1 form-line-column-clear jf-required form-subline @if($errors->has('anketo.' . $anketo->id)) form-line-error @endif" data-type="control_scale">
                            <label class="form-label form-label-top" id="label_anketo_<?= $anketo->id ?>" for="input_anketo_<?= $anketo->id ?>">
                                <?= $anketo->id ?>．<?= $anketo->question ?>&nbsp;
                                <span class="form-required">*</span>
                            </label>
                            <div class="form-input-wide jf-required">
                            <span class="form-sub-label-container" style="vertical-align:top">
                                <table role="radiogroup" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <label for="input_<?= $anketo->id ?>_worst" aria-hidden="true"> 全くあてはまらない </label>
                                        </td>

                                        <td style="text-align:center">
                                            <label for="input_<?= $anketo->id ?>_1">1</label>
                                            <input type="radio" class="form-radio" name="anketo[<?= $anketo->id ?>]" value="1" title="1" id="input_<?= $anketo->id ?>_1"  @if(old('anketo.' . $anketo->id) == 1) checked @endif >
                                        </td>

                                        <td style="text-align:center">
                                            <label for="input_<?= $anketo->id ?>_1">2</label>
                                            <input type="radio" class="form-radio" name="anketo[<?= $anketo->id ?>]" value="2" title="2" id="input_<?= $anketo->id ?>_2" @if(old('anketo.' . $anketo->id) == 2) checked @endif >
                                        </td>
                                        <td style="text-align:center">
                                            <label for="input_<?= $anketo->id ?>_1">3</label>
                                            <input type="radio" class="form-radio" name="anketo[<?= $anketo->id ?>]" value="3" title="3" id="input_<?= $anketo->id ?>_3" @if(old('anketo.' . $anketo->id) == 3) checked @endif >
                                        </td>
                                        <td style="text-align:center">
                                            <label for="input_<?= $anketo->id ?>_1">4</label>
                                            <input type="radio" class="form-radio" name="anketo[<?= $anketo->id ?>]" value="4" title="4" id="input_<?= $anketo->id ?>_4" @if(old('anketo.' . $anketo->id) == 4) checked @endif >
                                        </td>
                                        <td style="text-align:center">
                                            <label for="input_<?= $anketo->id ?>_1">5</label>
                                            <input type="radio" class="form-radio" name="anketo[<?= $anketo->id ?>]" value="5" title="5" id="input_<?= $anketo->id ?>_5" @if(old('anketo.' . $anketo->id) == 5) checked @endif >
                                        </td>
                                        <td class="text-center">
                                            <label for="input_<?= $anketo->id ?>_best" aria-hidden="true"> とてもあてはまる </label>
                                        </td>
                                    </tr>
                                    </tbody>‘
                                </table>
                            </span>

                                @if($errors->has('anketo.' . $anketo->id))
                                    <div class="form-error-message" role="alert">
                                        <img src="https://cdn.jotfor.ms/images/exclamation-octagon.png">{{ $errors->first('anketo.' . $anketo->id) }}
                                        <div class="form-error-arrow">
                                            <div class="form-error-arrow-inner"></div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>

                    @endforeach

                </div>
            </li>

            <li class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-large">
                    <div class="header-text httal htvam">
                        <h3 class="form-header" data-component="header">
                            プライバシーポリシーについて
                        </h3>

                        <div class="form-subHeader">
                            株式会社原田教育研究所のプライバシーポリシーについては、下記をご確認下さい。<br>
                            <a href="https://t-mp.net/harada/privacy/">https://t-mp.net/harada/privacy/</a>
                        </div>

                    </div>

                    <div class="form-line form-subline @if($errors->has('send_flag')) form-line-error @endif" data-type="control_radio">
                        <label class="form-label form-label-top">
                            原田教育研究所から研修・セミナー情報等をお送りしてもよろしいですか？<span class="form-required">*</span>
                        </label>
                        <div class="form-input-wide">
                            <div class="form-single-column" role="group" data-component="radio">
                                <span class="form-radio-item" style="clear:left">
                                    <span class="dragger-item"></span>
                                    <input type="radio" class="form-radio" id="input_send_flag_0" name="send_flag" value="1" @if(old('send_flag') == 1) checked @endif>
                                    <label for="input_send_flag_0"> はい </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                    <span class="dragger-item"></span>
                                    <input type="radio" class="form-radio" id="input_send_flag_1" name="send_flag" value="0" @if(old('send_flag') == 0) checked @endif>
                                    <label for="input_send_flag_1"> いいえ </label>
                                </span>

                            </div>

                            @if($errors->has('send_flag'))
                                <div class="form-error-message" role="alert">
                                    <img src="https://cdn.jotfor.ms/images/exclamation-octagon.png">{{ $errors->first('send_flag') }}
                                    <div class="form-error-arrow">
                                        <div class="form-error-arrow-inner"></div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>


            </li>


            <li class="form-input-wide" data-type="control_head">
                <div class="form-header-group  header-large">
                    <div class="header-text httal htvam">
                        <h3 class="form-header" data-component="header">
                            ご質問は以上です。
                        </h3>

                        <div class="form-subHeader">
                            ご回答をどうもありがとうございました。折返し、結果のメールをお送り致します。
                        </div>

                    </div>

                    <div class="form-line form-subline text-center">
                        <input type="submit" class="form-submit-button submit-button" value="送信する">


                    </div>
                </div>
            </li>



        </ul>
    </div>
</form>

</body>
</html>