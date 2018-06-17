$(document).ready(function(){

	$(document).scroll(function(){
		if ($(document).scrollTop() > 500) {
			$(".menuInterior").css("height","80px");
		} else {
			$(".menuInterior").removeAttr("style");
		}
	});

	$('.contendorItemsLotes').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        768:{
	            items:1
	        },
	        1170:{
	            items:1
	        }
	    },
	    navText:["<i class='material-icons'>keyboard_arrow_left</i>","<i class='material-icons'>keyboard_arrow_right</i>"]
	})

	//CONSULTA AJAX FORM
	$("#contact-form").submit(function(e){
		e.stopPropagation();
		e.preventDefault();
		$.ajax({
			url: "/wp-content/themes/notanpink/enviarForm.php", 
			data: $("#contact-form").serialize(),
		    error: function(xhr){
		        console.log("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
		    },
			success: function(result){
		        var respuesta = result;
		        $("#modal").html(respuesta);
		        $("#modal").fadeIn();
		        setTimeout(function(){
		        	$("#modal").fadeOut();
		        },3000);
		    }
		});
	});

	$(".arrow-down").click(function(){
		$("html, body").animate({"scrollTop":$(this).parents("section").next().offset().top-70},800);

	});



	fixHeight1();

	$(window).resize(function(){
		console.log("resize");
	    fixHeight1();
	});

	$(".menu-icon, .close").click(function(){
		$(".movil .menu-principal").toggleClass("movil-menu-visible");
	});

});

function fixHeight1() {
	if ($(document).width() > 767) {
	    $(".section3 .item > .img").each(function(){
	    	$(this).removeAttr("style");
	        $(this).css("height",$(this).parents(".section3 .item").height());
	    });
	}
}