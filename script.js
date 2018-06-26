$(document).ready(function(){
    $("#area1").addClass("hidden");
    $("area").hover(function(){  
        $area_selected = $(this).attr("href");
        console.log($area_selected);
        $('#info-panel > div').addClass('hidden');
        $($area_selected).removeClass('hidden');   
        $('#default').addClass('hidden');      
    },function(){
        $("#info-panel > div").addClass("hidden");
        $("#default").removeClass("hidden");
    });

    
    
})