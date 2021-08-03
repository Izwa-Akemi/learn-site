<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <section class="counseling-section">
        <div class="counseling-wrap">
            <table class="counseling-table">
                <tr>
                    <td>リテラシーレベル</td>
                    <td><input type="text" style="width: 43rem;"></td>
                </tr>
                <tr>
                    <td>カウンセリング結果</td>
                    <td><textarea name="" id="" cols="100" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>意思決定予定日</td>
                    <td><input type="date"></td>
                </tr>
            </table>
            <div id="tabs">
                <ul>
                    <li><a href="{{ url('counseling_tabs') }}">提案</a></li>
                    <li id="loadA">
                        <button id="load">追加</button>
                    </li>
                </ul>
            </div>
            <div class="button-list">
                <ul class="button-list-item">
                    <li><button class="save">保存</button></li>
                    <li><button class="print" type="button">印刷</button></li>
                </ul>
            </div>
        </div>


    </section>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>