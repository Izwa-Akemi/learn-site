$(function() {
    $("a, button", ".toolbar").button();

    $("#tabs").tabs();
    //var tabCount = 1;
    //var tabNavTmpl2 = "<li><a href=\{{ url('counseling_tabs')}}\">提案 {2}</a></li>";
    //var tabNavTmpl2 = "<li id='add{0}'><a href=\counseling_tabs.html\">提案 {2}</a></li>";

    /*$("#load").on('click',function () {
        ++tabCount;
        //tabNavTmpl2の{0}をtabCountに置換する
        var tabNav = tabNavTmpl2.replace("{0}", tabCount).replace("{1}", tabCount).replace("{2}", tabCount);
        $("#tabs").find("#loadA").before(tabNav);

        $("#tabs").tabs("refresh");
       return false;
    });*/
    $("#tabs").tabs();
    var tabCount = 1;
    var tabNavTmpl1 = "<li><a href=\{{ url('counseling_tabs')}}\">提案 {0}</a></li>";*/
    
    $("#load").on('click',function() {
        ++tabCount;
        var tabNav = tabNavTmpl1.replace("{0}", tabCount);
        $("#tabs").find( ".ui-tabs-nav" ).before(tabNav);
        $("#tabs").tabs("refresh");
    });
});