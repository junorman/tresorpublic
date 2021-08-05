$(document).ready(function() {
	$("#cat-recettes").click(function() {
		$(".active").removeClass("active");
		$(this).addClass("active");

		$("#contribuables").hide();
		$("#recettes").show();
	});


	$("#type-cont").click(function() {
		$(".active").removeClass("active");
		$(this).addClass("active");

		$("#recettes").hide();
		$("#contribuables").show();
	});


	$("#add-cat").submit(function(e) {
		e.preventDefault();

		var donnee = $(this).serialize();

		$.ajax({
			type: 'POST',
			url: 'categorie.php',
			data: donnee,
			success: function(data){
				$("#reponse").html(data);
			}
		});
	});

	$("#add-type").submit(function(e) {
		e.preventDefault();

		var donnee = $(this).serialize();

		$.ajax({
			type: 'POST',
			url: 'type.php',
			data: donnee,
			success: function(data){
				$("#reponse").html(data);
			}
		});
	});
});