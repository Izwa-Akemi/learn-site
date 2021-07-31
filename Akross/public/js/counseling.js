$(function(){
    /*function loadCounseling() {
        $.ajax({
            type: 'POST',
            url: '/counselings',
            dataType: 'html',
            success: function (data) {
                $('#counseling').html(data);
            },
            error: function () {
                alert('error');
            }
        });
    }*/
    $('#counseling').hide();
    $(".counseling").on('click',function(){
        $('#counseling').toggle();
        $("#counseling").load("/counselings");
       })  
})