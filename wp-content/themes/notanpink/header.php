<html>
<title></title>
 <meta name="title" content="">
 <meta name="DC.Title" content="">
 <meta http-equiv="title" content="">
 <meta name="DC.Creator" content="www.diezweb.com.ar">
 <meta name="keywords" content="">
 <meta http-equiv="keywords" content="">
 <meta name="description" content="">
 <meta http-equiv="description" content="">
 <meta http-equiv="DC.Description" content="">
 <meta name="author" content="www.diezweb.com.ar">
 <meta name="DC.Creator" content="www.diezweb.com.ar">
 <meta name="vw96.objectype" content="Document">
 <meta name="resource-type" content="Document">
 <meta http-equiv="Content-Type" content="UTF-8">
 <meta name="distribution" content="all">
 <meta name="robots" content="all">
 <meta name="revisit" content="30 days">
 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<!--Para adaptar a móviles (usar google chrome en ventana incógnito y google nexus4 en emulador para editar css. agregar css responsive al final 
@media screen and (min-width:1px) and (max-width:1000px) {
).-->
<link rel="STYLESHEET" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrolly.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/lightbox/js/lightbox.min.js"></script>
<link href="<?php bloginfo('template_url'); ?>/js/lightbox/css/lightbox.css" rel="stylesheet" />

<!--ICONOS GOOGLE-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/wow/css/libs/animate.css">
<!-- fin efectos wow -->

<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">

<script src="<?php echo get_stylesheet_directory_uri() ?>/js/owl.carousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/js/owl.carousel.min.css">

<script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom.js"></script>


<!-- SCROLLMAGIC -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>

<!-- ------------------------ ANIMACIONES SCROLLMAGIC ------------------------ -->
<script>
$(document).ready(function(){

	//INICIALIZAR CONTROLLER
	var scrollMagicController = new ScrollMagic.Controller();

	$(".fadeOut").each(function(index,element){
		// CREANDO ANIMACIÓN
		var fadeOut = new TweenMax.fromTo(element, 0.5, {opacity: 1, y: 0}, {opacity: 0, y: 50});
		//ASIGNANDO TRIGGERS
		var scene = new ScrollMagic.Scene({triggerElement: element, offset: 300, duration: 400}).setTween(fadeOut).addTo(scrollMagicController);
	})

	$(".fadeInUpOffsetEarly").each(function(index,element){
		// CREANDO ANIMACIÓN
		var fadeInUp = new TweenMax.fromTo(element, 0.5, {opacity:0, y:50},{y: 0, opacity: 1});
		//ASIGNANDO TRIGGERS
		var scene = new ScrollMagic.Scene({triggerElement: element, offset: -550, duration: 400}).setTween(fadeInUp).addTo(scrollMagicController).addIndicators();
	})

	var i = 0;
	var offsetAnterior = 0;
	$(".fade-in-normal").each(function(index,element){
		var offset = $(element).offset().top;
		if (offsetAnterior == offset) {
			i += 0.2;
		} else {
			i = 0;
		}
		offsetAnterior = $(element).offset().top;
		// CREANDO ANIMACIÓN
		var fadeInUp = new TweenMax.fromTo(element, 0.5, {opacity:0, y:50},{y: 0, opacity: 1, delay: i});
		//ASIGNANDO TRIGGERS
		var scene = new ScrollMagic.Scene({triggerElement: element, offset: -250}).setTween(fadeInUp).addTo(scrollMagicController);
	})

	$(".fadeInUpOffsetLate").each(function(index,element){
		// CREANDO ANIMACIÓN
		var fadeInUp = new TweenMax.fromTo(element, 0.5, {opacity:0, y:50}, {y:0, opacity: 1});
		//ASIGNANDO TRIGGERS
		var scene = new ScrollMagic.Scene({triggerElement: element, offset: -50, duration: 400}).setTween(fadeInUp).addTo(scrollMagicController).addIndicators();
	})
});
</script>
<!-- ------------------------ FIN ANIMACIONES SCROLLMAGIC ------------------------ -->


<header class="header">
	<div class='menuInterior container'>
		<a href="/">
			<div class="img-logo hidden-sm">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="710px" height="290px" viewBox="0 0 710 290" enable-background="new 0 0 710 290" xml:space="preserve"><g><g><g><path fill="#424242" d="M47.725,8.604H22.16C10.724,8.604,5,14.583,5,26.551v173.834h18.036V26.551h23.813v173.834h18.035V26.551C64.884,14.583,59.162,8.604,47.725,8.604z"/><path fill="#424242" d="M127.104,8.604h-25.557c-11.445,0-17.169,5.979-17.169,17.946v156.057c0,11.858,6.019,17.777,18.046,17.777h23.526c12.214,0,18.322-5.919,18.322-17.777V26.551C144.272,14.583,138.549,8.604,127.104,8.604z M126.227,182.434h-23.803V26.551h23.803V182.434z"/><polygon fill="#424242" points="154.387,26.551 175.256,26.551 175.256,200.385 193.498,200.385 193.498,26.551 214.27,26.551 214.27,8.604 154.387,8.604 "/><path fill="#424242" d="M266.518,8.604h-25.556c-11.455,0-17.169,5.979-17.169,17.946v173.834h18.046v-95.993h23.804v95.993h18.054V26.551C283.696,14.583,277.973,8.604,266.518,8.604z M265.643,86.437h-23.804V26.551h23.804V86.437z"/><path fill="#424242" d="M345.387,8.604h-25.564c-11.447,0-17.161,5.979-17.161,17.946v173.834h18.046V26.551h23.803v173.834h18.046V26.551C362.556,14.583,356.832,8.604,345.387,8.604z"/><path fill="#424242" d="M423.737,8.604h-42.726v191.78h18.045v-95.993h23.805c12.027,0,18.036-6.019,18.036-18.067V26.551C440.897,14.583,435.174,8.604,423.737,8.604z M422.861,86.437h-23.805V26.551h23.805V86.437z"/><rect x="458.844" y="8.604" fill="#424242" width="18.045" height="191.78"/><path fill="#424242" d="M537.971,8.604h-25.556c-11.446,0-17.17,5.979-17.17,17.946v173.834h18.056V26.551h23.795v173.834h18.045V26.551C555.141,14.583,549.417,8.604,537.971,8.604z"/><path fill="#424242" d="M647.611,29.896c5.731-3.818,11.963-6.912,18.526-9.335c-5.724-4.637-11.938-8.656-18.526-12.055c-6.592,3.398-12.808,7.418-18.52,12.055c-19.182,15.55-32.917,37.511-37.97,62.594V8.604h-18.035v191.78h18.035v-74.657c5.053,25.082,18.788,47.049,37.97,62.595c5.712,4.641,11.928,8.656,18.52,12.063c6.589-3.406,12.803-7.422,18.526-12.063c-6.572-2.433-12.795-5.518-18.526-9.327c-24.145-16.048-40.116-43.458-40.116-74.554C607.495,73.345,623.467,45.934,647.611,29.896z"/><path fill="#424242" d="M686.221,120.862c-2.53,13.53-8.128,25.985-16.024,36.638h22.088c6.313-11.138,10.704-23.497,12.716-36.638H686.221z"/><path fill="#424242" d="M703.237,78.991c-1.688-6.965-4.068-13.632-7.036-20.007h-20.96c3.702,6.232,6.661,12.93,8.771,20.007H703.237z"/></g></g><g><path fill="#424242" d="M5.174,225.109h6.35l20.253,30.336l20.244-30.336h6.359v55.588h-6.277V235.67l-20.25,29.78h-0.316l-20.25-29.701v44.948H5.174V225.109z"/><path fill="#424242" d="M108.405,224.711h5.88l25.328,55.986h-6.747l-6.514-14.693H96.097l-6.59,14.693h-6.436L108.405,224.711z M123.89,260.366l-12.627-28.348l-12.706,28.348H123.89z"/><path fill="#424242" d="M164.307,225.109h6.276v33.193l31.924-33.193h8.097l-23.822,24.3l24.855,31.288h-7.86l-21.361-26.921l-11.832,11.993v14.928h-6.276V225.109z"/><path fill="#424242" d="M235.145,225.109h40.177v5.638h-33.907v19.14h30.34v5.64h-30.34v19.533h34.31v5.638h-40.579V225.109z"/><path fill="#424242" d="M360.214,224.711h5.878l25.328,55.986h-6.745l-6.515-14.693h-30.256l-6.589,14.693h-6.436L360.214,224.711z M375.696,260.366l-12.627-28.348l-12.705,28.348H375.696z"/><path fill="#424242" d="M449.393,225.109h6.827l15.88,46.299l15.246-46.457h5.164l15.247,46.457l15.886-46.299h6.59l-19.852,55.986h-5.32l-15.251-45.108l-15.321,45.108h-5.246L449.393,225.109z"/><path fill="#424242" d="M555.877,225.109h6.278v55.588h-6.278V225.109z"/><path fill="#424242" d="M611.31,281.494c-4.453,0-8.514-0.73-12.191-2.188c-3.681-1.451-7.187-3.692-10.522-6.711l3.89-4.605c2.912,2.648,5.85,4.618,8.817,5.917c2.961,1.3,6.376,1.949,10.239,1.949c3.761,0,6.765-0.892,9.014-2.66c2.253-1.776,3.38-4.038,3.38-6.793v-0.161c0-1.27-0.215-2.417-0.64-3.452c-0.424-1.032-1.166-1.971-2.23-2.818c-1.065-0.847-2.53-1.616-4.417-2.303c-1.883-0.685-4.284-1.353-7.203-1.986c-3.184-0.69-5.96-1.48-8.321-2.384c-2.36-0.897-4.309-1.983-5.848-3.254c-1.538-1.27-2.683-2.75-3.425-4.444c-0.742-1.693-1.113-3.68-1.113-5.96v-0.158c0-2.167,0.452-4.178,1.35-6.034c0.898-1.853,2.169-3.457,3.814-4.801c1.636-1.353,3.573-2.41,5.795-3.18c2.227-0.767,4.657-1.15,7.306-1.15c4.078,0,7.636,0.567,10.681,1.705c3.045,1.141,5.996,2.848,8.856,5.124l-3.656,4.841c-2.594-2.114-5.2-3.652-7.82-4.606c-2.619-0.95-5.36-1.426-8.222-1.426c-3.649,0-6.537,0.859-8.655,2.582c-2.115,1.72-3.175,3.848-3.175,6.391v0.158c0,1.322,0.215,2.503,0.634,3.535c0.426,1.029,1.194,1.985,2.309,2.857c1.109,0.873,2.646,1.669,4.604,2.384c1.958,0.716,4.471,1.391,7.541,2.024c6.193,1.377,10.764,3.283,13.696,5.715c2.94,2.438,4.408,5.772,4.408,10.007v0.161c0,2.383-0.469,4.537-1.413,6.469c-0.938,1.937-2.234,3.591-3.89,4.968c-1.654,1.377-3.64,2.433-5.974,3.175C616.599,281.12,614.059,281.494,611.31,281.494z"/><path fill="#424242" d="M656.731,225.109h6.272v24.698h32.084v-24.698h6.268v55.588h-6.268v-25.015h-32.084v25.015h-6.272V225.109z"/></g></g>
			</div>
		</a>
		<div class="menu-principal">
			<div class="item-nav"><a href="/imagen-personal">IMAGEN PERSONAL</a></div>
			<div class="item-nav"><a href="/deco">DECO</a></div>
			<div class="item-nav"><a href="/nosotras">NOSOTRAS</a></div>
			<div class="item-nav"><a href="/blog">BLOG</a></div>
			<div class="item-nav"><a href="/#contacto-home">CONTACTO</a></div>
			<div class="item-nav social-icon"><a href="/blog.php"><i class="fa fa-instagram"></i></a></div>
			<div class="item-nav social-icon"><a href="/blog.php"><i class="fa fa-facebook"></i></a></div>
			<div class="item-nav social-icon"><a href="/blog.php"><i class="fa fa-twitter"></i></a></div>
		</div>
	</div>
</header>

</html>