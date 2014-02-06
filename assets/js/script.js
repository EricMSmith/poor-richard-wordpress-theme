$(document).ready(function(){

    /* # Show spinner untill everything's loaded. */
    $('.spinner').show();

    /* # Make videos responsive. */
    $('.post').fitVids();

    /* # Open/close menu. */
	$('.nav-control').click(function(){
		$('body').toggleClass('nav-open');
	});

    /* Make specific links open in a new window in a HTML5 valid way */
	$('a[rel*="external"]').click(function(){
		$(this).attr('target', '_blank');
	})
	
    /* Masonry style display for portfolio thumbnails */
    var container = document.querySelector('#masonry-container');
    var msnry;
    // initialize Masonry after all images have loaded.
    imagesLoaded( container, function() {
        msnry = new Masonry( container );
    });


	
    /* Magnific popup lightbox */
    $('.gallery').magnificPopup({
        delegate: 'a.gallery-popup', // child items selector, by clicking on it popup will open
        gallery: {enabled:true},
        type: 'image',        
        image: {
             titleSrc: function(item) {
                return item.el.parents('.gallery-thumbnail').find('figcaption').html();
             }
        }
    });


});

$(window).load(function(){

    /* # All loaded, hide spinner. */
	$('.spinner').hide();

});