<!-- 
Template Name: Imagen Personal
-->
<html>
<head>
<?php wp_head(); ?>
<?php get_header(); ?>
</head>
<body class="imagen-personal-page">


<div class="central container">

<section class="section1 fullwidth">
	<div class="movil-img visible-xs"></div>
	<div class="cont col-xs-12 col-sm-5">
		<div class="tit">ASESORAMIENTO DE IMAGEN</div>
		<div class="text">¿Sentís que no tenés nada que te queda bien? ¿Te cambió el cuerpo? ¿Tu vida ahora es diferente? ¿No sabés cual es tu estilo? ¿Dudás al momento de vestirte? Podemos ayudarte a mejorar tu manera de vestir y que te sientas segura, apropiada y siempre linda.</div>
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
				Nos encontramos con vos para conocerte y entender cómo sos y qué necesitas. Te hacemos tres entrevistas individuales con test de estilo, tipo de cuerpo, tipo de rostro y colores que te sientan bien.
			</div>
		</div>
		<div class="fade-in-normal separator hidden-xs"><i class='material-icons'>keyboard_arrow_right</i></div>
		<div class="fade-in-normal item item2">
			<div class="icon">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/Documentos.svg" alt="">
			</div>
			<div class="text">
				Armamos un informe personalizado con tu estilo, tus colores, lo que te sienta mejor y una musa de inspiración para que tengas un referente actualizado en todo momento.
			</div>
		</div>
		<div class="fade-in-normal separator hidden-xs"><i class='material-icons'>keyboard_arrow_right</i></div>
		<div class="fade-in-normal item item3">
			<div class="icon">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/Diamante.svg" alt="">
			</div>
			<div class="text">
				Te acompañamos a una clase personalizada de auto maquillaje y auto peinado, y te damos consejos para que realces tu belleza interior y encuentres tu propio estilo.
			</div>
		</div>
	</div>
</section>


<section class="section3">
	<div class="tit-section fade-in-normal">PODÉS ELEGIR ENTRE ESTAS OPCIONES:</div>
	<div class="cont-options">
		<div class="item item1">
			<div class="fade-in-normal img col-xs-12 col-sm-6"></div>
			<div class="fade-in-normal info col-xs-12 col-sm-6">
				<div class="tit">ASESORAMIENTO DE IMAGEN PERSONAL</div>
				<div class="text">¿No sabés que ponerte? ¿Tu guardarropa es una zona de guerra entre lo que te gusta y lo que te queda bien? Podemos ayudarte a organizar un fondo de armario que te sirva siempre y en todo lugar, con los toques perfectos para darle tu personalidad y tu onda.</div>
				<a href="/#contacto-home"><div class="button">¡ME INTERESA!</div></a>
			</div>
		</div>
		<div class="item item2 inversed">
			<div class="fade-in-normal img col-xs-12 col-sm-6"></div>
			<div class="fade-in-normal info col-xs-12 col-sm-6">
				<div class="tit">¡HELP! TENGO UN EVENTO</div>
				<div class="text">¿Tenés una entrevista laboral importantísima? ¿Una conferencia? ¿Una cita especial? ¿Necesitás verte fabulosa pero no te decidís? ¡Podes salir de compras o probarte mil cosas con alguien que sabe! Te visitamos en tu casa o vamos de shopping para encontrar el look perfecto que te hará brillar.</div>
				<a href="/#contacto-home"><div class="button">¡ME INTERESA!</div></a>
			</div>
		</div>
		<div class="item item3">
			<div class="fade-in-normal img col-xs-12 col-sm-6"></div>
			<div class="fade-in-normal info col-xs-12 col-sm-6">
				<div class="tit">TALLER DE IMAGEN</div>
				<div class="text">Este taller de imagen personal está dirigido a mujeres con iniciativa, que honran el valor de la mujer en la sociedad y se desempeñan en la vida con compromiso y alegría. Es un taller pensado para mujeres dinámicas y multifuncionales, para las que corren todo el día… corren, pero nunca olvidan que aman ser mujeres.</div>
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