$(function () {
    function loadFollow() {
        $.ajax({
            type: 'GET',
            url: 'follow.blade.php',
            dataType: 'php',
            success: function (data) {
                $('#follow').php(data);
            },
            error: function () {
                alert('error');
            }
        });
    }
    $('#follow').hide(loadFollow);
    $(".follow").on('click', function () {
        $('#follow').toggle(loadFollow());
    })
})