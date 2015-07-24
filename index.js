$( document ).ready(function() {
	$(".link1").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".projects")
	    }, 2000);
	});
	$(".link2").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".beg").offset().top
	    }, 2000);
	});
	$(".link3").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".fun").offset().top
	    }, 2000);
	});
	$(".link4").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".pract").offset().top
	    }, 2000);
	});
	
		$(".linkt").click(function() {
	    $('html, body').animate({
	        scrollTop: $(".chal").offset().top
	    }, 2000);
	});
});
