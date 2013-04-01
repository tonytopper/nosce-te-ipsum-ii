$(document).ready(function() {
	$("header h1 a").lettering();
});

$(function(){
  $('#posts').masonry({
    // options
    itemSelector : '.post',
    columnWidth: function( containerWidth ) {
    	return containerWidth / 2;
  	}
  });
});