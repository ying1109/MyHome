// 顶部点击展闭左侧导航栏
$('#top_icon').click(function(event) {
    if ($('#sidebar').is(':hidden')) {
        $('#sidebar').show('slow');
        $('#content').css('margin-left', '250px');
    } else {
        $('#sidebar').hide('slow');
        $('#content').css('margin-left', '0');
    }
});

// 左侧导航栏菜单展闭
$(document).ready(function () {
    // nav收缩展开
    $('.sidebar_menu li a').on('click',function(){
        var parent = $(this).parent().parent();//获取当前页签的父级的父级
        var labeul = $(this).parent("li").find(">ul");
        if ($(this).attr('class') != 'active') {
            //展开未展开
            parent.find('li a').removeClass("active").find(".arrow").removeClass("open");
            parent.find("li").removeClass("active");
            parent.find("ul").css({'display': 'none'});
            $(this).parent("li").addClass("active").find(labeul).slideDown('slow');
            $(this).addClass("active").find(".angle").addClass("open");
        }else{
            $(this).parent("li").removeClass("open").find(labeul).slideUp('slow');
            if($(this).parent().find("ul").length>0){
                $(this).removeClass("active").find(".angle").removeClass("open")
            }else{
                $(this).addClass("active");
            }
        }
    });
});