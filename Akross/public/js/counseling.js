$(function(){
    function loadCounseling() {
        $.ajax({
            type: 'GET',
            url: 'counselings.blade.php',
            dataType: 'php',
            success: function (data) {
                $('#counseling').php(data);
            },
            error: function () {
                alert('error');
            }
        });
    }
    $('#counseling').hide(loadCounseling);
    $(".counseling").on('click',function(){
        $('#counseling').toggle(loadCounseling());
       })  
})