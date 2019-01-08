$(document).ready(function(){
	$(window).scroll(function(){
		if($(window).scrollTop() > 150){
			$("#header nav").css({'position':'fixed','z-index':'9999'});
		}else{
			$("#header nav").css({'position':'absolute'});
		}
	})

	$('.slick_xemnhieu').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
  		autoplaySpeed: 2000,
  		speed:500,
  		dots:true,
  		mouseover:true,
  		arrow:false,
  		responsive: [
		    {
		      breakpoint: 1023,
		      settings: {
		        slidesToShow: 4,
		        slidesToScroll: 1,
		      }
		    },
		    {
		      breakpoint: 767,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 425,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    }
    	]
	})
	$('.btn_sp a').click(function(){
		$('#header .menu').slideToggle()
		return false;
	})
	$('#top a').attr('href','http://t3g-blog.tk/thien-dia-hoi.html');
	

})
