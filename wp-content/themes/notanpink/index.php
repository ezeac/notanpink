<html>
<head>
<?php wp_head(); ?>
<?php get_header(); ?>
</head>
<body>


<div class="central container">

<section class="landing fullwidth">
	<div class="text">Make a Wish</div>
	<div class="arrow-down move-up-down"><i class="material-icons">keyboard_arrow_down</i></div>
</section>

<section class="serv">
	<div class="container">
		<div class="fade-in-normal item item1 col-xs-12 col-sm-6">
			<div class="tit">ASESORAMIENTO DE IMAGEN</div>
			<div class="img">
				<div class="background"></div>
				<div class="info">
					<div class="text">¿Tenés tu armario repleto pero no encontrás que ponerte? ¿Sentís que siempre te ves igual? No estas segura de lo que te queda bien? ¿No sabes cual es tu estilo? ¿Perdés tiempo probandote mil cosas o haces compras equivocadas? Queremos ayudarte a que te veas hermosa</div>
					<a href="/imagen-personal"><div class="button">LEER MÁS</div></a>
				</div>
			</div>
		</div>
		<div class="fade-in-normal item item2 col-xs-12 col-sm-6">
			<div class="tit alter">DECORACIÓN DE INTERIORES</div>
			<div class="img">
				<div class="background"></div>
				<div class="info">
					<div class="text">¿Querés que tu casa sea funcional, pero linda a la vez? ¿Sabés lo que querés pero te cuesta armarlo armoniosamente? ¿Te gustaría que el estilo de tu deco refleje tu personalidad y la de tu familia? ¿No sabés por donde empezar?</div>
					<a href="/deco"><div class="button">LEER MÁS</div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="arrow-down move-up-down"><i class="material-icons">keyboard_arrow_down</i></div>
</section>

<section class="trabajos">
	<div class="tit-section">ÚLTIMOS TRABAJOS</div>
	<div class="contendorItemsLotes owl-carousel">
		<?php
		wp_reset_query();
		query_posts('post_type=trabajo&posts_per_page=99');
		if(have_posts()) : while (have_posts()) : the_post();
		?>
			<div class="cont-trabajos">
				<img class="trab-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
				<div class="tit"><?php the_title(); ?></div>
				<div class="text"><?php the_content(); ?></div>
			</div>
		<?php endwhile; else: ?>
			<h1>
				No se encontraron trabajos recientes.
			</h1>
		<?php endif; wp_reset_query(); ?>
	</div>
	<div class="pagination">
		<?php next_posts_link('Post Siguientes') ?>
		<?php previous_posts_link('Post Anteriores') ?>
	</div>
</section>


<section class="cta">
	<div class="tit fade-in-normal">Magia interior a tu alcance</div>
	<a href="https://api.whatsapp.com/api/send?phone=5493513459071" target="_blank"><div class="button fade-in-normal"><i class="fa fa-whatsapp"></i>ENVIAR WHATSAPP</div></a>
</section>


<section class="contacto" id="contacto-home">
	<div class="titStyle2">CONTACTANOS</div>
	<div class="text">
		Llena el formulario si querés más información, o si preferís, podés ponerte en contacto con nosotras a través del teléfono, whatsapp o enviándonos un e-mail a notanpink@gmail.com
	</div>
	<div class="text text2">
		<b>Asesora Imagen Personal Sara L. Carbel</b><br>(+549) 351 345 9071
		<br><br>
		<b>Arquitecta Carolina Dell’Agnolo</b><br>(+549) 351 641 1298
	</div>
	<div class="social">
		<div class="social-icon"><a href="https://www.instagram.com/notanpink/"><i class="fa fa-instagram"></i></a></div>
		<div class="social-icon"><a href="https://www.facebook.com/notanPink/"><i class="fa fa-facebook"></i></a></div>
		<div class="social-icon"><a href="https://twitter.com/notanpink"><i class="fa fa-twitter"></i></a></div>
	</div>
	<div class="fade-in-normal form">
		<form id="contact-form" action="javascript:void(0)">
			<input class="item-form" type="text" name="nombre" placeholder="Nombre" required>
			<input class="item-form" type="text" name="email" placeholder="Email" required>
			<textarea class="item-form" name="mensaje" id="" placeholder="Mensaje"></textarea>
			<input class="button" type="submit" value="ENVIAR">
		</form>
	</div>
</section>

</div>

<!-- para tipo personalizado
	<div class="contendorItemsLotes">
		<?php
		//query_posts('post_type=lotes&posts_per_page=99');
		//if(have_posts()) : while (have_posts()) : the_post();
		?>
			<a href="<?php //echo types_render_field("imagen", array("url"=>true)); ?>" data-lightbox="<?php //the_title(); ?>" style="background: url('<?php //echo types_render_field("imagen", array("url"=>true)); ?>')"><i class="material-icons">search</i></a>
			<div class="tituloLote animacionLote"><h3><?php //the_title(); ?></h3></div>
			<div class="textoLote animacionLote"><?php //the_content(); ?></div>
			<div class="precioLote animacionLote">VALOR: €<?php //echo types_render_field("precio", array("row"=>true)); ?>.</div>
			<div class="tituloLote animacionLote botonNegro linkAFormulario" onclick="$('#campo').val('<?php //the_title(); ?>');">CONSULTAR</div>
		<?php //$f++; endwhile; else: ?>
			<h1>
				No se encontraron lotes.
			</h1>
		<?php //endif; ?>
		<div class="pagination">
			<?php //next_posts_link('Post Siguientes') ?>
			<?php //previous_posts_link('Post Anteriores') ?>
		</div>
	</div>
fin tipo personalizado -->


<!-- <div class="formularioContendor">
	<form id="formularioContenedorForm" type="submit" action="javascript:void(0)">
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><input type="text" placeholder="Nombre*" name="nombre" id="nombre" required></div>
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><input type="text" placeholder="Email*" name="email" id="email" required></div>
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><input type="text" placeholder="Tel*" name="tel" id="tel" required></div>
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><textarea placeholder="Consulta" name="mensaje" id="mensaje"></textarea></div>
		<div class="inputForm fadeInUpOffsetNormalFormTexto"><input type="submit" name="Enviar" value="Enviar"></div>
	</form>
	<div class="contactoMensaje"></div>
</div> -->


<script>
	// $(document).ready(function(){
	// 	$("#formularioContenedorForm").submit(function(e){
	// 		e.stopPropagation();
	// 		var nombre = $("#nombre").val();
	// 	    var email = $("#email").val();
	// 	    var tel = $("#tel").val();
	// 	    var mensaje = $("#mensaje").val();
	// 		if (nombre == ""){
	// 			alert("Debe completar su nombre.");
	// 			$("#nombre").focus();
	// 		} else if (email == ""){
	// 			alert("Debe completar su email.");
	// 			$("#email").focus();
	// 		} else {
	// 			mostrarMensajeSalida(nombre, email, tel, mensaje);
	// 		}

	// 	});




	// 	function mostrarMensajeSalida(nombre, email, tel, mensaje) {
	// 	    var xmlhttp = new XMLHttpRequest();
	// 	    xmlhttp.onreadystatechange = function() {
	// 	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	// 	            $(".contactoMensaje").html(xmlhttp.responseText);
	// 	        }
	// 	    };
	// 	    xmlhttp.open("GET", "<?php //bloginfo("template_url"); ?>/enviarContacto.php?nombre=".concat(nombre, "&email=", email, "&tel=", tel, "&mensaje=", mensaje), true);
	// 	    if (nombre != "" && email != ""){
	// 	    	xmlhttp.send();
	// 	    	$(".contactoMensaje").fadeIn();
	// 	    	$("html,body").animate({"scrollTop":$(".contactoMensaje").offset().top-100});
	// 	    }
	// 	}													
	// });
</script>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
<div id="modal"></div>
</body>
</html>