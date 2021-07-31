$(function () {
    /*function loadFollow() {
        $.ajax({
            type: 'GET',
            url: 'follows',
            dataType: 'php',
            success: function (data) {
                $('#follow').blade.php(data);
            },
            error: function () {
                alert('error');
            }
        });
    }*/
    $('#follow').hide();
    $(".follow").on('click', function () {
        $('#follow').toggle();
        $("#follow").load("/follows");
    })
})