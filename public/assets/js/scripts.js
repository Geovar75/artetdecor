let collapseList = document.getElementsByClassName("block");
let i;

for(i = 0; i < collapseList.length; i++){
    collapseList[i].addEventListener("click", function(){

        this.classList.toggle("active");
        let content = this.nextElementSibling;
        if(content.style.maxHeight){
            content.style.maxHeight = null;
        }else{
            content.style.maxHeight = content.scrollHeight + "px";
        
            setTimeout(() => {
                window.scrollTo({
                    top: this.getBoundingClientRect().top, 
                    left: 0,
                    });
            }, 500);
            
        }
    })
};

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
    loop:true,
    autoplaySpeed: 0,
    speed: 700,
    cssEase: 'linear',
    slidesToShow: 6,
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

  $(".salle-a-manger, .bureau, .boiseries, .salon, .salle-de-bain, .facade, .chambre, .cuisine, .fer, .sol").hover(
    function () {
      $(".inside span", this).slideToggle("fast");
    },
    function () {
      $(".inside span", this).slideToggle("fast");
    }
  );
  
});

$('.panel-collapse').on('show.bs.collapse', function () {
  $(this).siblings('.panel-heading').addClass('active');
});

$('.panel-collapse').on('hide.bs.collapse', function () {
  $(this).siblings('.panel-heading').removeClass('active');
});



$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    // more then one submenu open?
    this.multiple = multiple || false;
    
    var dropdownlink = this.el.find('.dropdownlink');
    dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();
    
    $next.slideToggle();
    $this.parent().toggleClass('open');
    
  }
  
  var accordion = new Accordion($('.accordion-menu'), false);
})