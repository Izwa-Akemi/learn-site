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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                    <td><input type="date" name="date"></td>
                    <td><button class="button-color">今日</button></td>
                    <td><button class="button-color">昨日</button></td>
                </tr>
                <tr>
                    <td>種別</td>
                    <td>
                        <select name="type_form">
                        <option value="0"></option>
                            @foreach($type_forms as $type_form)
                            <option value="{{$type_form->type_form}}">{{$type_form->type_form}}</option>
                            @endforeach
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
                    <td><input type="date" name="sales_date"></td>
                    <td>指定時間</td>
                    <td><input type="time" name="sales_time"></td>
                </tr>
                <tr class="table-color">
                    <td>電話可能時間</td>
                    <td>
                        <select name="tell_possibled">
                            <option value="0"></option>
                            @foreach($tell_possibleds as $tell_possibled)
                            <option value="{{$tell_possibled->tell_possibled}}">{{$tell_possibled->tell_possibled}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>曜日</td>
                    <td>
                        <select name="week">
                            <option value="0"></option>
                            @foreach($weeks as $week)
                            <option value="{{$week->week}}">{{$week->week}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="table-color">
                    <td>申し込み理由</td>
                    <td>
                        <select name="reason">
                            <option value="0"></option>
                            @foreach($reasons as $reason)
                            <option value="{{$reason->reason}}">{{$reason->reason}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>その他</td>
                    <td><input type="text" name="reason_anoher"></td>
                </tr>
                <tr class="table-color">
                    <td>習得したいスキル</td>
                    <td>
                        <select name="skill">
                            <option value="0"></option>
                            @foreach($skills as $skill)
                            <option value="{{$skill->skill}}">{{$skill->skill}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>その他</td>
                    <td><input type="text" name="skill_another"></td>
                </tr>
                <tr class="table-color">
                    <td>現在のスキル</td>
                    <td>
                        <select name="current_skill">
                            <option value="0"></option>
                            @foreach($current_skills as $current_skill)
                            <option value="{{$current_skill->current_skill}}">{{$current_skill->current_skill}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>その他</td>
                    <td><input type="text" name="current_skill_another"></td>
                </tr>
                <tr class="table-color">
                    <td>知ったきっかけ</td>
                    <td>
                        <select name="know_trigger">
                            <option value="0"></option>
                            @foreach($know_triggers as $know_trigger)
                            <option value="{{$know_trigger->know_trigger}}">{{$know_trigger->know_trigger}}</option>
                            @endforeach
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
                    <td><input type="date" name="reservation_day"></td>
                    <td>予約時間</td>
                    <td>
                        <select name="reservation_possible">
                            <option value="0"></option>
                            @foreach($reservation_possibles as $reservation_possible)
                            <option value="{{$reservation_possible->reservation_possible}}">{{$reservation_possible->reservation_possible}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>担当講師</td>
                    <td>
                        <select name="teacher_id">
                            <option value="0"></option>
                            @foreach($teachers as $teacher)
                            <option value="{{$teacher->teacher_name}}">{{$teacher->teacher_name}}</option>
                            @endforeach
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
        </form>
        <div id="counseling"></div>
        <div id="follow"></div>

    </main>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/counseling.js') }}"></script>
    <script src="{{ mix('js/counseling_tab.js') }}"></script>
    <script src="{{ mix('js/follow.js') }}"></script>
</body>

</html>