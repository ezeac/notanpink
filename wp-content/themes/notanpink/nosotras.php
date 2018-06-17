<!-- 
Template Name: Nosotras
-->
<html>
<head>
<?php wp_head(); ?>
<?php get_header(); ?>
</head>
<body class="nosotras-page">


<div class="central container">

<section class="nos-section1">
	<div class="titStyle2 col-xs-12">SOBRE NOSOTRAS</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="img col-xs-12 col-sm-6">
			<img class="trab-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
		</div>
		<div class="hidden-xs col-sm-1">&nbsp;</div>
		<div class="cont col-xs-12 col-sm-5">
			<?php the_content(); ?>
		</div>
	<?php endwhile; else: ?>
	<p>Sección en construcción.</p>
	<?php endif; ?>
</section>


</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
<div id="modal"></div>
</body>
</html>