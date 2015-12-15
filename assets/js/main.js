$(document).ready(function(){
	var $click=$(".click");

	$click.click(function(){
		$(this).siblings(".fullDesc").toggleClass("hidden");
	});
	var options = {
	bg: '#ffc715'
};

var nanobar = new Nanobar( options );
	nanobar.go(30);
	$(window).load(function() {
    	nanobar.go(100);
	});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});

});
