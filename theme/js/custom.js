$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};
$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top - 30
        }, 800, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });


//-----------------


$(document).ready(function(){
    setTimeout(() => {
        $(".header").addClass("scrolled")
    }, 600);
    //menu toggle
    $(".menu-button").click(function(){
        $(this).toggleClass("cross")
        $(".menu-content").slideToggle(600)
        $(this).css("pointer-events", "none")
        setTimeout(() => {
            $(this).css("pointer-events", "all")
        }, 700);
    })

    $(".menu-item").click(function(){
      $(".menu-content").slideUp(600)
      $(".menu-button").removeClass("cross")
    })

    // product hover
    if(($(window).innerWidth() > 1024)){
        $(".accessory").mouseover(function(){
            $(".accessory").addClass("defocus");
            $(this).removeClass("defocus");
        })
        $(".accessory").mouseout(function(){
            $(".accessory").removeClass("defocus");
        })
        $(".tshirt").mouseover(function(){
            $(".tshirt").addClass("defocus");
            $(this).removeClass("defocus");
        })
        $(".tshirt").mouseout(function(){
            $(".tshirt").removeClass("defocus");
        })
    }else{
        $(".accessory").addClass("hover");
        $(".tshirt").addClass("hover");
    }

    //cursor
    $(window).mousemove(function(e){
        if(($(window).innerWidth() > 1024)){
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
        }
        
        //banner image

        if(($(window).innerWidth() > 1024)){
            $(".model").css("transform", `translateX(${e.clientX / 50}px) translateY(${e.clientY / 40}px)`)
        }

    })
})
let accessoryHoverRunOnce = false;
let tshirtHoverRunOnce = false;

$(window).on('resize scroll', function() {
    
    $(".cursor").removeClass("active")
    $(".cursor .content").removeClass("show")
    //products attention
    if($(window).innerWidth() > 1024){
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
    }


    //nav scrolled animation
    if($(window).innerWidth() <= 1024){
        let parallax = $(window).scrollTop() / 4;
        if (parallax > 100){
            parallax = 100;
        }
        $(".model").css("transform", `translateY(${parallax}px)`)
    }
    
    //slick

    $('.tshirts').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        responsive: [
          {
            breakpoint: 9999,
            settings: "unslick"
          },
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '100px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 568,
            settings: {
              centerPadding: '70px',
            }
          },
          {
            breakpoint: 500,
            settings: {
              centerPadding: '30px',
            }
          },
          {
            breakpoint: 400,
            settings: {
              centerPadding: '10px',
            }
          },
          {
            breakpoint: 320,
            settings: {
              centerPadding: '0px',
            }
          }
        ]
      });
    $('.accessories').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        responsive: [
          // {
          //   breakpoint: 9999,
          //   settings: "unslick"
          // },
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '100px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 568,
            settings: {
              centerPadding: '70px',
            }
          },
          {
            breakpoint: 500,
            settings: {
              centerPadding: '30px',
            }
          },
          {
            breakpoint: 400,
            settings: {
              centerPadding: '10px',
            }
          },
          {
            breakpoint: 320,
            settings: {
              centerPadding: '0px',
            }
          }
        ]
      });
});