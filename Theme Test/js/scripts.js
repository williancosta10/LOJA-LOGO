$(document).ready(function(){
	
	$(".menu").find("li").hover(
		function(){
			$(".open_menu").find(".submenu").css("visibility", "hidden");
			$(this).find(".submenu").css("visibility", "visible");
		},function(){
			$(".open_menu").find(".submenu").css("visibility", "hidden");
	
		}
	);

	$(".submenu").hover(
		function(){
			$(this).css("visibility", "visible");
		}, function(){
			$(this).css("visibility", "hidden");
		}
	);

	$(".navbar-toggle").click(function(){
		$(".navbar-mob").toggle("clip");
	});

	$(".btn-close").click(function(){
		$(".navbar-mob").toggle("clip");
	});

	var nav = $('.header_principal');   
	$(window).scroll(function () { 
		if ($(this).scrollTop() > 150) { 
			nav.addClass("active-scroll");  
		} else { 
			nav.removeClass("active-scroll"); 
		} 
	}); 

});