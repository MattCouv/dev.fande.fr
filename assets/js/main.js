$(document).ready(function(){
	var $click=$(".click"),
		$cat70=$(".cat70"),
		$fullDesc=$(".fullDesc");
	$click.click(function(){
		$(this).siblings(".fullDesc").toggleClass("hidden");
	});
});
