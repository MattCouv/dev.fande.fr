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

// clic sur une étoile sur toutes les div de classe .rateit
$(".rateit").on('rated', function(event){
	var $vote = $(this),
	valeur = $vote.rateit('value'),
	idmovie = $vote.rateit('idmovie');
	$vote.rateit('readonly',true);
	$.ajax({
		url: 'index.php?ajx-rate', // la page appelée avec la commande spécifique
		data: { idmovie: idmovie, rate: valeur },
		type: 'POST', // la méthode
		// data contient les données retournées par le serveur
		success: function ( data ) {
		$vote.siblings('p').find('.rate').text(data);
		}
	});
});



});
