
// får knappen att komma fram och söka på nästa tryck
$(function() {
	$("#searchsubmit").click(function(e) {
		var search = $("#searchform");
		if( $("#searchform").is(":visible") ) {
			$("#searchform").submit();
		} else {
			search.animate({width: 'toggle'}, 500);
		}
	});
});