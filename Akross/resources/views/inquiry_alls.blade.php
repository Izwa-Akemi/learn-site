<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inquiry_all.css') }}">
</head>
<body>
    <header>
    @include('layouts.headers')
    </header>
    <section class="inquiry_all-section">
        <table class="inquiry_all-table">
            <tr>
                <th>氏名</th>
                <th>問合せ日</th>
                <th>状態</th>
                <th>カウンセリング予約日</th>
                <th>担当</th>
                <th>最新フォロー日</th>
                <th>実施</th>
                <th>フォロー内容</th>
            </tr>
            @foreach ($inquiry as $inquirys)
            <tr>
                <td>$inquirys->student_name</td>
                <td>$inquirys->created_at</td>
                <td></td>
                <td>$inquirys->reservation_day</td>
                <td>$inquirys->teacher_id</td>
                <td>$inquirys->follow_date</td>
                <td>$inquirys->follow_type</td>
                <td>$inquirys->follow_contents</td>
            </tr>
            @endforeach
        </table>
   
    </section>
</body>
</html>