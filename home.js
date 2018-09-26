$(function () {
  $(document).scroll(function () {
	  var $nav = $("nav");
	  $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
	  if( $(this).scrollTop() > $nav.height()){
	  	  	$nav.removeClass("navtr");
	  	  	$nav.addClass("navtr1");
	  	  }
	  else{
	  		$nav.removeClass("navtr1");
	  	  	$nav.addClass("navtr");
	  	  }
	});
});