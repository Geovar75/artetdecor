$(document).ready(function () {
  $(".counter").countUp({
    time: 5000,
    delay: 20,
  });

  $(".partners-logos").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 300,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });

  $(".salle-a-manger, .bureau, .boiseries, .salon, .salle-de-bain, .facade, .chambre, .cuisine, .fer, .sol").hover(
    function () {
      $(".inside span", this).slideToggle("fast");
    },
    function () {
      $(".inside span", this).slideToggle("fast");
    }
  );

  
});
