// JavaScript Document

$(document).ready(function(){
	$("#menu-main-menu, .nivo-controlNav, .entry-content").addClass("clearfix");	
	$(".widget_twitter li span").removeClass("entry-content");
	$("#slider p br").remove();
	if(jQuery.support.cssFloat){$(".entry-content").hide();}
	$(".category-documentaries:nth-child(even)").css({'clear':'both'});
	//$(".entry-content p img").before("&nbsp;&nbsp;&nbsp;");
	$(".bmk_footer_item:last").css("margin-right","0");
	
	//alert(jQuery.support.cssFloat);
	
	//$(".trailer_launch").colorbox({width:"700", height:"470", iframe:true});
	
	$(".ni_col_last").next(".ni_3_col1").css("clear","both");
	
	$(".img_vimeo").parent().each(function(){
		var vimeo = $(this).children('.img_vimeo').attr("data-vimeo");
		var img = $(this).children('.img_vimeo');
		$.getJSON('http://vimeo.com/api/v2/video/'+vimeo+'.json', function(data) {
			img.attr("src",data[0].thumbnail_large);
		});
		$(this).hover(function(){
			img.replaceWith('<iframe src="https://player.vimeo.com/video/'+vimeo+'?color=c9ff23&title=0&byline=0&portrait=0" width="410" height="231" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
		});
	});
	
	$(".fer nav a").click(function(e){
		e.preventDefault();
		$('html,body').scrollTo(this.hash,this.hash); 
	});
	
});


$(window).load(function() {
	//nivo slider
	/*
	$("#slider").show();

	$('#slider p').nivoSlider({
		effect:'random', //Specify sets like: 'fold,fade,sliceDown'
		slices:15,
		animSpeed:500, //Slide transition speed
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, //Next & Prev
		directionNavHide:true, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
      	controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.png', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		//keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
	
	$("#slider").animate({opacity:1},1000); //fade in
	
	*/
	
	if(jQuery.support.cssFloat){$(".entry-content").show(175);}
	
	
});

/*
$(window).resize(function() {
  $('#footer').css({'width':'100%'});
});
*/
/*
$(window).scroll(function() {
	$('body').css({'width':'100%'});
})*/