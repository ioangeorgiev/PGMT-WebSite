$(document).ready(function() {
	$(window).scroll(function(){
		if($(this).scrollTop() > 50) {
			$(".scrollup").fadeIn(130);
		} else {
			$(".scrollup").fadeOut(130);
		}
	});

	$(".scrollup").on('click', function(){
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});
});