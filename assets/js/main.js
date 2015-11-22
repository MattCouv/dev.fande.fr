$(document).ready(function(){
	var $click=$(".click");
	$click.click(function(){
		$(this).siblings(".otherText").toggleClass("hidden");
	});
});
