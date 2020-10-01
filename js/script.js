//global $,jQuery,alret
$(document).ready(function (){

	
    $('.carousel').carousel({
        interval:2000
    });
	//  Cashing the Scrol Top Element

    var scrollButton = $("#scroll-top");
    $(window).scroll(function () {

        $(this).scrollTop() >= 700 ? scrollButton.show() : scrollButton.hide();

    });

    // Click On Botton To Scroll Top 
    scrollButton.click(function () {
        $("html ,body").animate({ scrollTop: 0 }, 600);

    });
    });
// Loading Screen
$(window).load(function (){

	// loading elements
	$('.loading-overlay .sk-folding-cube').fadeOut(2000,function (){
			//show scroll
	$('body').css('overflow','auto')
		$(this).parent().fadeOut(2000,function (){

			$(this).remove();
		})
	})
})