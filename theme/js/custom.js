

$(document).ready(function(){
    $(".accessory").mouseover(function(){
        $(".accessory").addClass("defocus");
        $(this).removeClass("defocus");
    })
    $(".accessory").mouseout(function(){
        $(".accessory").removeClass("defocus");
    })
    $(window).mousemove(function(e){
        $(".cursor").css("left",`${e.clientX}px`)
        $(".cursor").css("top",`${e.clientY}px`)
        if($(".accessory:hover").length != 0){
            $(".cursor").addClass("active")
            $(".cursor .content").addClass("show")
        }else{
            $(".cursor").removeClass("active")
            $(".cursor .content").removeClass("show")
        }
    })
})