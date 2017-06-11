$(function() {
	$("#portfolio_grid").mixItUp();
	$(".s_portfolio li").click(function(){
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	})
	$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );

	$(".portfolio_item").each(function(i){
		$(this).find("a").attr("href","#work_"+i);
		$(this).find(".podrt_descr").attr("id","work_"+i)
	})
	$(".popup_content").magnificPopup({type:'inline',
  midClick: true});
	$(".popup").magnificPopup({type:"image"});
	$(".info h1").animated("fadeInDown","fadeOutUp");
	$(".info p").animated("fadeInUp","fadeOutDown");
	$(".section_header h2").animated("fadeInDown","fadeOutUp");
	$(".section_header p").animated("fadeInUp","fadeOutDown");
	$(".animation_right").animated("fadeInRight","fadeOutRight");
	$(".animation_left").animated("fadeInLeft","fadeOutLeft");
	$(".animation_center").animated("fadeInDown","fadeOutDown");
	function heightDetect(){
		$(".main-head").css("height",$(window).height());	
	};
	heightDetect();
	$(window).resize(function(){
		heightDetect();
	})

});
$(window).load(function() { 
	$(".loaderInner").fadeOut(); 
	$(".loader").delay(400).fadeOut("slow"); 
});

$(".toggle_menu, .menu_item").click(function(){
  $(".sandwich").toggleClass("active");
});

$(".top_menu").click(function(){
	$(".top_menu").fadeOut(600);
	$(".sandwich").toggleClass("active");
})

$(".toggle_menu").click(function(){
	if( $(".top_menu").is(":visible") )
	{
		$(".top_menu").addClass("h_opacify");
		$(".top_menu").fadeOut(600);
		$(".top_menu li a").removeClass("fadeInUp animated ");
	}else
	{
		$(".top_menu").removeClass("h_opacify");
		$(".top_menu").fadeIn(600);
		$(".top_menu li a").addClass("fadeInUp animated");	
	}
		
});

