jQuery(document).ready(function() {
	jQuery(".open-post").click(function() {
		url=jQuery(this).attr("data-href");
		window.location=url;
	})
	
	jQuery("#menu-toggle").click(function() {
		jQuery("#header").css("zIndex","1002");
	});
	
	jQuery(".btn-close").click(function() {
		jQuery("#header").css("zIndex","1000");
	})
	
	jQuery("#edit-field-conditions-und-65").prop("checked",false);

})
