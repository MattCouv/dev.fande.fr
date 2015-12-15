$(document).ready(function(){
	var $click=$(".click"),
		$cat70=$(".cat70"),
		$fullDesc=$(".fullDesc");
	$click.click(function(){
		$(this).siblings(".fullDesc").toggleClass("hidden");
	});
	var options = {
	bg: '#ffc715'
};

var nanobar = new Nanobar( options );
	nanobar.go(50);
	$(window).load(function() {
    	nanobar.go(100);
	});
});
