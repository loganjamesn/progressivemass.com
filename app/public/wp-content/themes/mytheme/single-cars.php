<?php get_header();?>

<section class="page-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<?php get_template_part('includes/section', 'cars');?>		
				<?php wp_link_pages();?>		
			</div>
			<div class="col-lg-6">
				<ul>
					<li>
						Color: <?php the_field('color');?>
					</li>
					<li>
						Registration: <?php the_field('registration');?>
					</li>
				</ul>
				
			</div>
		</div>
		<?php if(has_post_thumbnail()):?>
			<img src="<?php the_post_thumbnail_url('blog-large');?>" class="img-fluid mb-3">
		<?php endif?>
		<h1><?php the_title();?></h1>
		


	</div>
</section>

<?php get_footer();?>