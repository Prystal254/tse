$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};



//-----------------


$(document).ready(function(){

    // accessory hover

    $(".accessory").mouseover(function(){
        $(".accessory").addClass("defocus");
        $(this).removeClass("defocus");
    })
    $(".accessory").mouseout(function(){
        $(".accessory").removeClass("defocus");
    })

    //cursor

    $(window).mousemove(function(e){
        $(".cursor").css("left",`${e.clientX}px`)
        $(".cursor").css("top",`${e.clientY}px`)
        if($(".accessory:hover").length != 0){
            $(".cursor").addClass("active")
            $(".cursor .content").removeClass("show")
            $(".cursor .accessory-content").addClass("show")
        }else if($(".cta:hover").length != 0){
            $(".cursor").addClass("active")
            $(".cursor .content").removeClass("show")
            $(".cursor .shop-content").addClass("show")
        }else if($(".tshirt:hover").length != 0){
            $(".cursor").addClass("active")
            $(".cursor .content").removeClass("show")
            $(".cursor .buy-content").addClass("show")
        }else{
            $(".cursor").removeClass("active")
            $(".cursor .content").removeClass("show")
        }
    })
})
let accessoryHoverRunOnce = false;
let tshirtHoverRunOnce = false;

$(window).on('resize scroll', function() {
    
    //products attention

    if ($('.accessories').isInViewport()) {
        let i = 0;
        if(accessoryHoverRunOnce == false){
            setInterval(() => {
                $(".accessory").removeClass("hover")
                $(".accessory").eq(i).addClass("hover")
                i++;
            }, 400);
        }
        accessoryHoverRunOnce = true;
    }

    if ($('.tshirts').isInViewport()) {
        let i = 0;
        if(tshirtHoverRunOnce == false){
            setInterval(() => {
                $(".tshirt").removeClass("hover")
                $(".tshirt").eq(i).addClass("hover")
                i++;
            }, 600);
        }
        tshirtHoverRunOnce = true;
    }

    //banner parallax
    let modelParallax = $(window).scrollTop() / 7;
    if(modelParallax > 150){
        modelParallax = 150;
    }
    $(".model").eq(0).css("transform", `translateY(${modelParallax}px)`)
    $(".model").eq(1).css("transform", `translateY(${modelParallax * 1.1}px)`)
});