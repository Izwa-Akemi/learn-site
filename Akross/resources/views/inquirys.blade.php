<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inquiry.css') }}">
    <link rel="stylesheet" href="{{ asset('css/counseling.css') }}">
    <link rel="stylesheet" href="{{ asset('css/counseling_tab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/follow.css') }}">
</head>

<body>
    <header>
        @include('layouts.headers')
    </header>
    <main>
        <form action="{{ url('inquirys') }}" method="POST">
            @csrf
            <table class="inquirys-table">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="student_id"></td>
                </tr>
                <tr>
                    <td>日付</td>
                    <td><input type="text" name="date"></td>
                    <td><button class="button-color">今日</button></td>
                    <td><button class="button-color">昨日</button></td>
                </tr>
                <tr>
                    <td>種別</td>
                    <td>
                        <select name="type_form">
                            <option value="0"></option>
                            <option value="1">個人</option>
                            <option value="2">個人予約</option>
                            <option value="3">法人</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>氏名</td>
                    <td><input type="text" name="student_name"></td>
                    <td><button class="admission-color">入学</button></td>
                </tr>
                <tr>
                    <td>電話</td>
                    <td><input type="text" name="student_tell"></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td colspan="2"><input type="text" name="student_address" style="width: 25rem;"></td>
                </tr>
                <tr>
                    <td>メール</td>
                    <td><input type="text" name="student_mail"></td>
                    <td><button id="gmail" class="button-color">gmail</button></td>
                </tr>
                <tr>
                    <td>職業</td>
                    <td><input type="text" name="profession"></td>
                </tr>
                <tr>
                    <td>法人名</td>
                    <td><input type="text" name="corporation"></td>
                </tr>
                <tr>
                    <td>部署名</td>
                    <td><input type="text" name="department"></td>
                </tr>
                <tr>
                    <td>法人問い合わせ種別</td>
                    <td><input type="checkbox" name="corporation_inquiry" class="table-check" value="0">研修</td>
                    <td><input type="checkbox" name="corporation_inquiry" class="table-check" value="1">その他</td>
                </tr>
                <tr>
                    <td>営業希望日</td>
                    <td><input type="text" name="sales_date"></td>
                    <td>指定時間</td>
                    <td><input type="text" name="sales_time"></td>
                </tr>
                <tr class="table-color">
                    <td>電話可能時間</td>
                    <td>
                        <select name="tell_possibled">
                            <option value="0"></option>
                            <option value="1">10:00</option>
                            <option value="2">10:30</option>
                            <option value="3">11:00</option>
                            <option value="4">11:30</option>
                            <option value="5">12:00</option>
                            <option value="6">12:30</option>
                            <option value="7">13:00</option>
                            <option value="8">13:30</option>
                            <option value="9">14:00</option>
                            <option value="10">14:30</option>
                            <option value="11">15:00</option>
                            <option value="12">15:30</option>
                            <option value="13">16:00</option>
                            <option value="14">16:30</option>
                            <option value="15">17:00</option>
                            <option value="16">17:30</option>
                            <option value="17">18:00</option>
                            <option value="18">18:30</option>
                            <option value="19">19:00</option>
                        </select>
                    </td>
                    <td>曜日</td>
                    <td>
                        <select name="week">
                            <option value="0"></option>
                            <option value="1">日</option>
                            <option value="2">月</option>
                            <option value="3">火</option>
                            <option value="4">水</option>
                            <option value="5">木</option>
                            <option value="6">金</option>
                            <option value="7">土</option>
                        </select>
                    </td>
                </tr>
                <tr class="table-color">
                    <td>申し込み理由</td>
                    <td>
                        <select name="reason">
                            <option value="0"></option>
                            <option value="1">転職・就職のため</option>
                            <option value="2">独立・フリーランス・在宅</option>
                            <option value="3">資格取得</option>
                            <option value="4">趣味</option>
                            <option value="5">その他</option>
                        </select>
                    </td>
                    <td>その他</td>
                    <td><input type="text" name="reason_anoher"></td>
                </tr>
                <tr class="table-color">
                    <td>習得したいスキル</td>
                    <td>
                        <select name="master_skill">
                            <option value="0"></option>
                            <option value="1">Webサイト制作・関連職種(Webデザイン・HTML/CSS/Javascript・Wordpress等・アクセス解析等)
                            </option>
                            <option value="2">プログラマー・サーバーサイド(Java・Python・PHP・サーバー・AWS等) </option>
                            <option value="3">デザイン（Photoshop・illustrator・デザイナー志望）</option>
                            <option value="4">広告・企画(マーケティング・アクセス解析・広告運用等)</option>
                            <option value="5">【東京校のみ】写真加工・フォトレタッチ（レタッチャー志望） </option>
                            <option value="6">何を学べばいいかわからない・未経験者カウンセリング・適性検査・業界について知りたい </option>
                            <option value="7">その他</option>
                        </select>
                    </td>
                    <td>その他</td>
                    <td><input type="text" name="master_skill_another"></td>
                </tr>
                <tr class="table-color">
                    <td>現在のスキル</td>
                    <td>
                        <select name="current_skill">
                            <option value="0"></option>
                            <option value="1">未経験、何となく言葉を聞いたことがある程度</option>
                            <option value="2">昔携わっていたことがある、古い知識・経験はある </option>
                            <option value="3">会社は業界の会社だが別担当のため詳しくはわからない</option>
                            <option value="4">管理者・発注側の立場</option>
                            <option value="5">別のスクールで学んだことがある</option>
                            <option value="6">その他</option>
                        </select>
                    </td>
                    <td>その他</td>
                    <td><input type="text" name="current_skill_another"></td>
                </tr>
                <tr class="table-color">
                    <td>知ったきっかけ</td>
                    <td>
                        <select name="know_trigger">
                            <option value="1"></option>
                            <option value="2">知人・友人の紹介</option>
                            <option value="3">バナー広告 </option>
                            <option value="4">チラシ・DM</option>
                            <option value="5">検索エンジンから検索 </option>
                            <option value="6">電車の車内広告を見て</option>
                            <option value="7">ブログ・比較サイトをみて</option>
                            <option value="8">短期講座に参加した</option>
                            <option value="9">その他</option>
                        </select>
                    </td>
                    <td>その他</td>
                    <td><input type="text" name="know_trigger_another"></td>
                </tr>
                <tr class="table-color">
                    <td>質問・要望など</td>
                    <td colspan="3"><input type="text" name="question" style="width: 43rem;"></td>
                </tr>
                <tr>
                    <td>予約日</td>
                    <td><input type="text" name="reservation_day"></td>
                    <td>予約時間</td>
                    <td>
                        <select name="reservation_possible">
                            <option value="0"></option>
                            <option value="1">10:00</option>
                            <option value="2">10:30</option>
                            <option value="3">11:00</option>
                            <option value="4">11:30</option>
                            <option value="5">12:00</option>
                            <option value="6">12:30</option>
                            <option value="7">13:00</option>
                            <option value="8">13:30</option>
                            <option value="9">14:00</option>
                            <option value="10">14:30</option>
                            <option value="11">15:00</option>
                            <option value="12">15:30</option>
                            <option value="13">16:00</option>
                            <option value="14">16:30</option>
                            <option value="15">17:00</option>
                            <option value="16">17:30</option>
                            <option value="17">18:00</option>
                            <option value="18">18:30</option>
                            <option value="19">19:00</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>担当講師</td>
                    <td>
                        <select name="teacher_id">
                            <option value="0"></option>
                            <option value="1">井澤</option>
                            <option value="2">島村</option>
                            <option value="3">田畑</option>
                            <option value="4">片桐</option>
                            <option value="6">飯山</option>
                            <option value="7">黒沢</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>その他</td>
                    <td colspan="3"><input type="text" name="another" style="width: 43rem;"></td>
                </tr>
            </table>
            <div class="button-list">
                <ul class="button-list-item">
                    <li><button class="save">保存</button></li>
                    <li><button class="counseling" type="button" formaction="{{ url('counselings') }}" formmethod="GET">カウンセリング</button></li>
                    <li><button class="follow" type="button" formaction="{{ url('follows') }}" formmethod="GET">フォロー状況</button></li>
                </ul>
            </div>
            <div id="counseling"></div>
            <div id="follow"></div>
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <script src="{{ asset('js/counseling.js') }}"></script>
    <script src="{{ asset('js/counseling_tab.js') }}"></script>
    <script src="{{ asset('js/follow.js') }}"></script>
</body>

</html>