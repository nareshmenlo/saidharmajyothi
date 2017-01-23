if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	var msViewportStyle = document.createElement('style')
	msViewportStyle.appendChild(
		document.createTextNode(
			'@-ms-viewport{width:auto!important}'
		)
	)
	document.querySelector('head').appendChild(msViewportStyle)
}


			
$( document ).ready(function() {
	$('#getting-started').countdown('2015/12/25', function(event) {
	var $this = $(this).html(event.strftime(''
		+ '<span>%m</span> Months, '
		+ '<span>%d</span> Days, '
		+ '<span>%H</span> hrs, '
		+ '<span>%M</span> mins, '
		+ '<span>%S</span> sec '));
	});
	
	
	
	$(function() {
		$( ".datepicker, .calendar" ).datepicker();
	});
	    $( ".donation" ).slideUp();
		$( ".map" ).slideUp();
		$( "#search-form" ).slideUp();
	$( ".map-close" ).click(function(e) {
		e.preventDefault();
		$( ".map" ).slideUp();
	});
	$( ".donation" ).slideUp();
		$( ".map" ).slideUp();
		$( "#search-form" ).slideUp();
	$( ".search-opener" ).click(function(e) {
		e.preventDefault();
		$( ".donation" ).slideUp();
		$( ".map" ).slideUp();
		$( "#search-form" ).slideDown();
	});
	$( ".donation-opener" ).click(function(e) {
		e.preventDefault();
		$( "#search-form" ).slideUp();
		$( ".map" ).slideUp();
		$( ".donation" ).slideDown();
	});
	$( ".map-opener" ).click(function(e) {
		e.preventDefault();
		$( ".donation" ).slideUp();
		$( "#search-form" ).slideUp();
		$( ".map" ).slideDown();
	});
	$(".page-info, .header-holder, #main").click(function(e) {
		e.preventDefault();
		$( ".donation" ).slideUp();
		$( ".map" ).slideUp();
		$( "#search-form" ).slideUp();
	});
});

// parallax
$(document).ready(function(){
   $('.parallax').scrolly({bgParallax: true});
   $('.parallax-main').scrolly({bgParallax: false});
   $('audio,video').mediaelementplayer();
    });


// back to top smooth scrolling
$(function() {
  $('.btn-top').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$('.fancybox-buttons')
.attr('rel', 'media-gallery')
.fancybox({
	helpers : {
		media : {}
	}
});
/* Events Maps*/
$(function(){
	$('#events-gmap').gmap3({
	  map:{
	    options:{
	      center:[50.578498,30.457275],
	       zoom:5,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    }
	  },
	  marker:{
	    values:[
	      {address:"Parvis de Notre Dame. 75004 Paris, France", data:"Priesthood Leadership Conference! - 9:45AM", options:{icon: "images/marker.png"}},
	      {address:"Germany", data:"Symposium on Worship - 10:45AM", options:{icon: "images/marker.png"}}
	    ],
	    options:{
	      draggable: false
	    },
	    events:{
	      click: function(marker, event, context){
	        var map = $(this).gmap3("get"),
	          infowindow = $(this).gmap3({get:{name:"infowindow"}});
	        if (infowindow){
	          infowindow.open(map, marker);
	          infowindow.setContent(context.data);
	        } else {
	          $(this).gmap3({
	            infowindow:{
	              anchor:marker, 
	              options:{content: context.data}
	            }
	          });
	        }
	      },
	      closeclick: function(){
	        var infowindow = $(this).gmap3({get:{name:"infowindow"}});
	        if (infowindow){
	          infowindow.close();
	        }
	      }
	    }
	  }
	});
});
/* Contact Page Map*/
$(function(){
$('#contact-gmap').gmap3({
  map:{
    options:{
      center:[48.578498,80.457275],
       zoom:4,
       scrollwheel: false,
      disableDoubleClickZoom: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
  },
  marker:{
    values:[
      {address:"Parvis de Notre Dame. 75004 Paris, France", data:"CrownHill 54 North Service Rd. <br/>Grimsby, ON L3M 1Y8 Canada ", options:{icon: "images/marker.png"}}
    ],
    options:{
      draggable: false,
    },
    events:{
      click: function(marker, event, context){
        var map = $(this).gmap3("get"),
          infowindow = $(this).gmap3({get:{name:"infowindow"}});
        if (infowindow){
          infowindow.open(map, marker);
          infowindow.setContent(context.data);
        } else {
          $(this).gmap3({
            infowindow:{
              anchor:marker, 
              options:{content: context.data}
            }
          });
        }
      },
      closeclick: function(){
        var infowindow = $(this).gmap3({get:{name:"infowindow"}});
        if (infowindow){
          infowindow.close();
        }
      }
    }
  }
});
});
/* Header Map*/
$(function(){
$('#header-gmap').gmap3({
  map:{
    options:{
      center:[41.9009627,-118.0566895],
       zoom:6,
     // scrollwheel: false,
     // disableDoubleClickZoom: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
  },
  marker:{
    values:[
      {address:"11355 Sheridan Boulevard Westminster, CO 80020 United States", data:"My Home !", options:{icon: "images/marker.png"}}
    ],
    options:{
      draggable: false,
    },
    events:{
      click: function(marker, event, context){
        var map = $(this).gmap3("get"),
          infowindow = $(this).gmap3({get:{name:"infowindow"}});
        if (infowindow){
          infowindow.open(map, marker);
          infowindow.setContent(context.data);
        } else {
          $(this).gmap3({
            infowindow:{
              anchor:marker, 
              options:{content: context.data}
            }
          });
        }
      },
      closeclick: function(){
        var infowindow = $(this).gmap3({get:{name:"infowindow"}});
        if (infowindow){
          infowindow.close();
        }
      }
    }
  }
});
});
/*Add Class To map info windo*/
$(document).ready(function(){
	$(".gm-style-iw").parent().addClass("map-infowindow");
});