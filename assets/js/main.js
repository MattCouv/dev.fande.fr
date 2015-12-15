$(document).ready(function(){
	var $click=$(".click");

	$click.click(function(){
		$(this).siblings(".fullDesc").toggleClass("hidden");
	});
<<<<<<< HEAD
	var options = {
	bg: '#ffc715'
};

var nanobar = new Nanobar( options );
	nanobar.go(50);
	$(window).load(function() {
    	nanobar.go(100);
	});
=======

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
>>>>>>> a61f14dc731dfb6c1d3cf0d2f749dfaa05024c7a
});
