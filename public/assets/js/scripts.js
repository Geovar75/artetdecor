$(document).ready(function(){
    $('.paint2').hide();
    $('.paint3').hide();
    $('.paint4').hide();
    $('.paint5').hide();
    $('.paint6').hide();
    $('.paint7').hide();
    $('.paint8').hide();
    $('.paint9').hide();

    $(".salle-a-manger").click(function(){
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint4').hide();
        $('.paint5').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint').show();
    });

     $(".salon").click(function(){
            $('.paint').hide();
            $('.paint3').hide();
            $('.paint4').hide();
            $('.paint5').hide();
            $('.paint6').hide();
            $('.paint7').hide();
            $('.paint8').hide();
            $('.paint9').hide();
            $('.paint2').show();
    });
    $(".bureau").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint4').hide();
        $('.paint5').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint3').show();
    });
    $(".boiseries").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint5').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint4').show();
    });
    $(".boiseries").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint5').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint4').show();
    });
    $(".salle-de-bain").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint4').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint5').show();
    });
    $(".boiseries").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint5').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint4').show();
    });
    $(".salle-de-bain").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint4').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint5').show();
    });
    $(".facade").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint4').hide();
        $('.paint5').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint6').show();
    });
    $(".chambre").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint4').hide();
        $('.paint5').hide();
        $('.paint6').hide();
        $('.paint8').hide();
        $('.paint9').hide();
        $('.paint7').show();
    });
    $(".cuisine").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint4').hide();
        $('.paint5').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint9').hide();
        $('.paint8').show();
    });
    $(".fer").click(function(){
        $('.paint').hide();
        $('.paint2').hide();
        $('.paint3').hide();
        $('.paint4').hide();
        $('.paint5').hide();
        $('.paint6').hide();
        $('.paint7').hide();
        $('.paint8').hide();
        $('.paint9').show();
    });

    $('.counter').countUp({
        'time': 5000,
        'delay': 20
      });

      $('.partners-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 300,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });

});