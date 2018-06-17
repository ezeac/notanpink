<!-- 
Template Name: Deco
-->
<html>
<head>
<?php wp_head(); ?>
<?php get_header(); ?>
</head>
<body class="deco-page">


<div class="central container">

<section class="section1 fullwidth">
	<div class="movil-img visible-xs"></div>
	<div class="cont col-xs-12 col-sm-5">
		<div class="titStyle2">DECORACIÓN DE INTERIORES</div>
		<div class="text">¿Querés que tu casa se sea funcional, pero linda a la vez? ¿Sabés lo que querés pero te cuesta armarlo con onda? ¿Te gustaría que el estilo de tu deco refleje tu personalidad y la de tu familia? Queremos ayudarte a que tu casa se vea hermosa.</div>
	</div>
</section>

<section class="section2 fullwidth">
	<div class="fade-in-normal tit-section">¿CÓMO LO HACEMOS?</div>
	<div class="cont-steps container">
		<div class="fade-in-normal item item1">
			<div class="icon">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/Test.svg" alt="">
			</div>
			<div class="text">
				Te visitamos y conversamos sobre tus gustos, tu familia y las rutinas de cada uno, para poder generarles un espacio a medida. Vemos tu casa y tomamos medidas, fotos e impresiones generales.
			</div>
		</div>
		<div class="fade-in-normal separator hidden-xs"><i class='material-icons'>keyboard_arrow_right</i></div>
		<div class="fade-in-normal item item2">
			<div class="icon">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/Regla.svg" alt="">
			</div>
			<div class="text">
				Dibujamos el plano de tu/s espacio/s y diseñamos su funcionalidad según el uso que vayas a darle. Agregamos paleta de colores, un tema de inspiración, arte, cortinas y cada objeto colocado en el lugar donde mejor se luzca.
			</div>
		</div>
		<div class="fade-in-normal separator hidden-xs"><i class='material-icons'>keyboard_arrow_right</i></div>
		<div class="fade-in-normal item item3">
			<div class="icon">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/Rayo.svg" alt="">
			</div>
			<div class="text">
				Elaboramos un manual de armado y de uso para que veas dónde, cómo y con quién hacer cada trabajo. O si preferís, nosotras lo hacemos por vos y dejamos tu casa lista para usar en pocos días.
			</div>
		</div>
	</div>
</section>


<section class="section3">
	<div class="fade-in-normal tit-section">PODÉS ELEGIR ENTRE ESTAS OPCIONES:</div>
	<div class="cont-options">
		<div class="item item1">
			<div class="fade-in-normal img col-xs-12 col-sm-6"></div>
			<div class="fade-in-normal info col-xs-12 col-sm-6">
				<div class="titStyle2">PROYECTO DECO + MANUAL</div>
				<div class="text">Podemos hacerte un PROYECTO DECO perfecto para vos y tu familia, que refleje tus gustos, tu estilo y tu forma de vida; que tenga todos los consejos y los datos que necesitas para hacerlo vos en el tiempo que quieras!</div>
				<a href="/#contacto-home"><div class="button">¡ME INTERESA!</div></a>
			</div>
		</div>
		<div class="item item2 inversed">
			<div class="fade-in-normal img col-xs-12 col-sm-6"></div>
			<div class="fade-in-normal info col-xs-12 col-sm-6">
				<div class="titStyle2">PROYECTO + EJECUCIÓN</div>
				<div class="text">Podemos ayudarte a que tus ambientes se vean hermosos y sean cómodos para vivir la vida que soñás. Te hacemos un proyecto de decoración que refleje tu estilo y lo dejamos listo en poco tiempo para que empieces a vivirlo!</div>
				<a href="/#contacto-home"><div class="button">¡ME INTERESA!</div></a>
			</div>
		</div>
		<div class="item item3">
			<div class="fade-in-normal img col-xs-12 col-sm-6"></div>
			<div class="fade-in-normal info col-xs-12 col-sm-6">
				<div class="titStyle2">INTERIORISMO PARA COMERCIOS</div>
				<div class="text">¿Sentís que tu local esta deslucido y no invita a los clientes? ¿Querés refrescar la imagen de tu negocio porque se ve algo anticuada? ¿Pensás que tus productos no se están mostrando adecuadamente? ¿Te gustaría lograr un ambiente mas acorde al target de tus clientes? ¡Podemos ayudarte a que tu local se vea de revista!</div>
				<a href="/#contacto-home"><div class="button">¡ME INTERESA!</div></a>
			</div>
		</div>
	</div>
</section>


</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
<div id="modal"></div>
</body>
</html>