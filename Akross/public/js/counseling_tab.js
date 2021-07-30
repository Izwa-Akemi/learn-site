$(function() {
    $("input:submit, a, button", ".toolbar").button();

    $("#tabs").tabs();
    var tabCount = 1;
    var tabNavTmpl2 = "<li id='add{0}'><a href=\"counseling_tabs.blade.php\">提案 {2}</a></li>";

    $("#load").on('click',function () {
        ++tabCount;
        //tabNavTmpl2の{0}をtabCountに置換する
        var tabNav = tabNavTmpl2.replace("{0}", tabCount).replace("{1}", tabCount).replace("{2}", tabCount);
        $("#tabs").find("#loadA").before(tabNav);

        $("#tabs").tabs("refresh");
       return false;
    });
     
});