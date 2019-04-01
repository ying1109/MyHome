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