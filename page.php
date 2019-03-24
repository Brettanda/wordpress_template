<?php get_header(); ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article>
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<div><?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
</main>
<?php //if(get_theme_mod('toggle_sidebar') == 'true'){get_sidebar();} ?>
<?php get_footer();?>