<?php get_header(); ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article>
					<header>
						<h1><?php the_title(); ?></h1>
						<p id="date"><?php the_date(); ?> at <?php the_time(); ?></p>
					</header>
					<div><?php the_content(); ?>
					
					<section id="comments">
					<?php comments_template(); ?>	
					</section>
					</div>
				</article>
			<?php endwhile; endif; ?>
</main>
<?php //if(get_theme_mod('toggle_sidebar') == 'true'){get_sidebar();}
get_footer();?>