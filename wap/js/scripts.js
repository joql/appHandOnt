var appMaster = {

    preLoader: function(){
        imageSources = []
        $('img').each(function() {
            var sources = $(this).attr('src');
            imageSources.push(sources);
        });
        if($(imageSources).load()){
            $('.pre-loader').fadeOut('slow');
        }
    },

    smoothScroll: function() {
        // Smooth Scrolling
        $('a[href*=#]:not([href=#carousel-example-generic])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    },

    reviewsCarousel: function() {
        // Reviews Carousel
        $('.review-filtering').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000
        });
    },

    screensCarousel: function() {
        // Screens Carousel
        $('.filtering').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });

        $('.js-filter-all').on('click', function() {
            $('.filtering').slickUnfilter();
            $('.filter a').removeClass('active');
            $(this).addClass('active');
        });

        $('.js-filter-one').on('click', function() {
            $('.filtering').slickFilter('.one');
            $('.filter a').removeClass('active');
            $(this).addClass('active');
        });

        $('.js-filter-two').on('click', function() {
            $('.filtering').slickFilter('.two');
            $('.filter a').removeClass('active');
            $(this).addClass('active');
        });

        $('.js-filter-three').on('click', function() {
            $('.filtering').slickFilter('.three');
            $('.filter a').removeClass('active');
            $(this).addClass('active');
        });

    },

    animateScript: function() {
        $('.scrollpoint.sp-effect1').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInLeft');},{offset:'100%'});
        $('.scrollpoint.sp-effect2').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInRight');},{offset:'100%'});
        $('.scrollpoint.sp-effect3').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInDown');},{offset:'100%'});
        $('.scrollpoint.sp-effect4').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeIn');},{offset:'100%'});
        $('.scrollpoint.sp-effect5').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInUp');},{offset:'100%'});
    },

    revSlider: function() {

        var docHeight = $(window).height();


        var mainSlider = $('.tp-banner').revolution({
            delay: 9000,
            startwidth: 1170,
            startheight: docHeight,
            hideThumbs: 10,
            touchenabled: false,
            fullWidth: "on",
            hideTimerBar: "on",
            fullScreen: "on",
            onHoverStop: "off",
            fullScreenOffsetContainer: ""
        });
        
    },

    scrollMenu: function(){
        var num = 50; //number of pixels before modifying styles
        if ($(window).scrollTop() > num) {
            $('nav').addClass('scrolled');
        }
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > num) {
                $('nav').addClass('scrolled');

            } else {
                $('nav').removeClass('scrolled');
            }
        });

        $('ul.navbar-nav li a').bind('click', function(){
            if($(this).closest('.navbar-collapse').hasClass('in')){
                $(this).closest('.navbar-collapse').removeClass('in');
            }
        });
        
    },
    /*placeHold: function(){
        // run Placeholdem on all elements with placeholders
        Placeholdem(document.querySelectorAll('[placeholder]'));
    },*/


}; // AppMaster


$(document).ready(function() {

    appMaster.smoothScroll();

    appMaster.reviewsCarousel();

    appMaster.screensCarousel();

    appMaster.animateScript();

    appMaster.revSlider();

    appMaster.scrollMenu();

    /*appMaster.placeHold();*/

});
function timeUptopBar(obj){
    var obj = $('.top-alert');
    obj.fadeOut(1500);
    return false;
}

function alertNavtopBar(msg,alerttype){
    var obj = $('.top-alert');
    var btn = $('.top-alert button')
    obj.removeClass('alert-success alert-warning alert-danger');

    obj.addClass('alert-'+alerttype);
    $('#navbar-msg').html(msg);
    obj.fadeIn(1500);
   
    setTimeout(function(){
        timeUptopBar();
    },4000);
    
    btn.click(function(){
        timeUptopBar(obj);
    });  
}


function alertNavtopBarSuccess(msg){
    alertNavtopBar(msg,'success');
}

function alertNavtopBarFail(msg){
    alertNavtopBar(msg,'danger');
}

function alertNavtopBarDanger(msg){
    alertNavtopBar(msg,'danger');
}

function alertNavtopBarWarning(msg){
    alertNavtopBar(msg,'warning');
}

//上传时，错误提示不自动消失
function alertNavtopBarDangerStatic(msg,alerttype){
	var obj = $('.top-alert');
    var btn = $('.top-alert button')
    obj.removeClass('alert-success alert-warning alert-danger');
    obj.addClass('alert-'+alerttype);
    $('#navbar-msg').html(msg);

    obj.animate({height:'toggle'},'slow');
    btn.click(function(){
        timeUptopBar(obj);
    });  
}


function useService(type, content)
{
    $('#service_content_box').show();
    $('#service_content').text(content);
    $('#service_type').val(type)
}

jQuery(document).ready(function($) {
    $('#activating_botton').click(function(){
        $('.theme-popover-mask').fadeIn(100);
        $('.theme-popover').slideDown(200);
    })

    $(".cls").hover(function(){
        $(this).attr("src","/img/vip/xred.png");
    },function(){
        $(this).attr("src","/img/vip/xblue.gif");
    })
    $(".cls,.btn-cancel,.btn-look").click(function(){
        $('.theme-popover-mask').fadeOut(100);
        $('.theme-popover').slideUp(200);
        $('.theme-popover2').slideUp(200);
    })

    $(".btn-login").click(function(){
        $('.theme-popover-mask').fadeIn(100);
        //$('.theme-popover2').slideDown(200);
        $('.theme-popover').slideUp(200);
        $('#w0').submit();
    })
    window.onload = function () {
        var w = $(window).width();


        if(w<=768){
            $("#deviceH").height(w+150)
        }


    }

})

function useServiceAjax()
{
    var service_type = $('#service_type').val();

    $.get('/activity/vipcard/service',{type:service_type}, function(re){
        if(re.code == 0)
        {
            $('#service_'+service_type).html('<a href="javascript:;" class="btn btn2 btn-primary inverse btn-sm">已使用</a>');
        }
        else if(re.code == 3)
        {
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-popover').slideDown(200);
        }
        else
        {
            $('#message_box').show();
            $('#message_content').text(re.msg);
        }
        $('#service_content_box').hide();
    }, 'json')

}

function showActivatingBox()
{
    $('.theme-popover-mask').fadeIn(100);
    $('.theme-popover').slideDown(200);
}