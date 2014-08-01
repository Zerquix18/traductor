function traducir( texto_ ) {
	$(document).ready( function() {
		$.ajax({
			type: "POST",
			url: "pet.php",
			data: { "texto" : texto_ },
			beforeSend:  function () {
				$("#resultado").html("Traduciendo...");
			},
			success: function ( resultado ) {
				$("#resultado").val( resultado );
			}
		});
	});
}