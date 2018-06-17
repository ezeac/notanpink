<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body class="single-page">


<div class="central container">

<!-- MOSTRAR LISTADO DE ENTRADAS -->
<section class="section single">
	<?php if(have_posts()) : while (have_posts()) : the_post();?>
		<article class="item-single">
			<div class="tit"><a class="back-link" href="/blog"><i class="material-icons">arrow_back</i></a><?php the_title(); ?></div>
			<?php if (has_post_thumbnail()) { ?>
				<img class="img-single" src="<?php the_post_thumbnail_url(); ?>" alt="">
			<?php } ?>	
			<div class="content">
				<div class="author"><?php echo get_avatar(get_the_author_meta('ID')); ?><span class="author-name">por: <b><?php the_author(); ?></b></span></div>
				<?php
				//echo get_avatar( wp_get_current_user()->user_email, 32 );
		        ?>
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; else: ?>
		<h1>
			No se encontraron artículos
		</h1>
	<?php endif; ?>

	<div class="pagination">
		<?php next_posts_link('Post Siguientes') ?>
		<?php previous_posts_link('Post Anteriores') ?>
	</div>
</section>




</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>