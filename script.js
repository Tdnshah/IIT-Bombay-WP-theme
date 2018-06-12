$(document).ready(function(){
    $("area").hover(function(){
        $area_selected = $(this).attr("href");
        $('#info-panel > div').addClass('hidden');
        $($area_selected).removeClass('hidden');      
    },function(){
        $("#info-panel > div").addClass("hidden");
        $("#area1").removeClass("hidden");
    })
})