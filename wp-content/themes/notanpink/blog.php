<!-- 
Template Name: Blog
-->
<html>
<head>
<?php wp_head(); ?>
<?php get_header(); ?>
</head>
<body class="blog-page">


<div class="central container">

<section class="blog-section1">
	<div class="titStyle2 col-xs-12">BLOG</div>
	<div class="cont-blog">
		<?php
		wp_reset_query();
		query_posts('post_type=blog&posts_per_page=99');
		if(have_posts()) : while (have_posts()) : the_post();
		?>
			<div class="item-blog">
				<div class="blog-img col-xs-12 col-sm-4" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center / cover" alt=""></div>
				<div class="cont2 col-xs-12 col-sm-8">
					<div class="tit"><?php the_title(); ?></div>
					<div class="text"><?php the_excerpt(); ?></div>
					<a class="link" href="<?php the_permalink(); ?>" target="_self">Leer más</a>
				</div>
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


</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
<div id="modal"></div>
</body>
</html>