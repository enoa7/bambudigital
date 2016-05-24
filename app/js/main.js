(function ( $ ) {
 
    $.fn.visitCounter = function() {

	    if ($.cookie('visits') == null) {
	    	// set value to 1 if it doesnt
	        var visits = $.cookie('visits', '1', { expires: 1 });
	        console.log(visits);
	    } else {
	    	// if its not null...
	        var cookie_value = $.cookie('visits');

	        // add the value by 1
	        cookie_value = parseInt($.cookie('visits')) + 1;

	        // display it on the console log
	        var visits = $.cookie('visits', cookie_value, { expires: 1 });
	        console.log(visits);
	    }
    };
 	
 	$(document).ready(function () {

 		// check if jquery goes smoothly
    	console.log('Ready Steady Go!');

    	// call the plugin
    	$(this).visitCounter();
 	})
}( jQuery ));