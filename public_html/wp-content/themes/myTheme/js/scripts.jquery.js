function mainmenu(){
jQuery("#top_menu ul.nav ul ").css({display: "none"}); // Opera Fix
jQuery("#top_menu ul.nav li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown(400);
		},function(){
		jQuery(this).find('ul:first').css({visibility: "hidden"});
		});
}
function scroll(direction) {

        var scroll, i,
                positions = [],
                here = jQuery(window).scrollTop(),
                collection = jQuery('.section');

        collection.each(function() {
            positions.push(parseInt(jQuery(this).offset()['top'],0));
        });

        for(i = 0; i < positions.length; i++) {
            if (direction == 'next' && positions[i] > here) { scroll = collection.get(i); break; }
            if (direction == 'prev' && i > 0 && positions[i] >= here) { scroll = collection.get(i-1); break; }
        }

        if (scroll) {
            jQuery.scrollTo(scroll, {
                duration: 750       
            });
        }
		
        return false;
    }
	
jQuery(document).ready(function(){				
	mainmenu();
	jQuery('#top_menu ul.nav').onePageNav({
    begin: function() {
	  console.log('start')
    },
    end: function() {
	  console.log('stop')
    }
  });


jQuery('ul.rollover li').opacityrollover({
					mouseOutOpacity:   0.65,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast'
				});

    

    jQuery("#next,#prev").click(function() {        
        return scroll(jQuery(this).attr('id'));        
    });
	
    jQuery('a[href*="#"]').click(function(event){
		jQuery.scrollTo(jQuery(jQuery(this).attr("href")), {
			duration: 750
    });	
	return false;
		});
jQuery(".scrolltoanchor").click(function() {
			jQuery.scrollTo(jQuery(jQuery(this).attr("href")), {
			duration: 750
		});
		return false;
		}); 
  

  
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({social_tools:''});
});