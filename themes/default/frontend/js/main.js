$(window).load(function () {
    $('.flexslider').flexslider({ 
    	directionNav: false,
    	slideshowSpeed: 3000,
        animationSpeed: 1000,
    });
    $('#galleryView,#album').click(function(){
    	$('#box').show();
    	gallery();
    });
    $('#close').click(function(){
		$('#box').hide();
	})
});


function gallery() {
    $("#gallery").carouFredSel({
		responsive	: true,
		prev        : ".left",
	    next        : ".right"	
	});
	//$("#gallery").imagesLoaded(gallery);	

}