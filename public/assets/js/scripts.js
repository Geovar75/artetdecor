
$(document).ready(function () {
  new PureCounter();
  new PureCounter({
      filesizing: true,
      selector: ".filesizecount",
      pulse: 2,
  });

  $(".partners-logos").slick({
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 700,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
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

  let name = $(".salle-a-manger, .bureau, .boiseries, .salon, .salle-de-bain, .facade, .chambre, .cuisine, .fer, .sol").val();

  $(".salle-a-manger, .bureau, .boiseries, .salon, .salle-de-bain, .facade, .chambre, .cuisine, .fer, .sol").hover(
    function () {
      $(".inside span", this).slideToggle("fast");
    },
    function () {
      $(".inside span", this).slideToggle("fast");
    }
  );
  
});

$('.button-collapse').sideNav({
  menuWidth: 300, // Default is 300
  edge: 'left', // Choose the horizontal origin
  closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
  draggable: true // Choose whether you can drag to open on touch screens,
}
); 
