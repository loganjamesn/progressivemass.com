<?php if( have_posts() ): while( have_posts() ): the_post();?>
	
	<p><?php echo get_the_date('F jS, Y');?></p>

	<?php the_content();?>

	<!-- <?php the_author();?> -->
	<?php 
	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
	?>

	<p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>

	<?php 
	$tags = get_the_tags();
	if($tags):
	foreach($tags as $tag):?>

		<a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
			<?php echo $tag->name?>
		</a>		

	<?php endforeach; endif;?>

	<?php
	$categories = get_the_category();
	foreach($categories as $cat):?>

		<a href="<?php echo get_category_link($cat->term_id);?>" class="badge">
			<?php echo $cat->name?>
		</a>

		<h4>Status: <?php the_field('bill_status');?></h4>

	<?php endforeach;?>

	<div class="nav__posts">
		<div class="row">
			<div class="col-md-6">
				<?php if( get_previous_post() ):?>
					<div class="prev-link">
						<h3 class="title"><?php echo get_the_title( get_previous_post() )?></h3>
						<h4 class="date"><?php echo get_the_date( 'F jS, Y', get_previous_post() )?></h4>
						<?php previous_post_link('%link'); ?>					
					</div>
				<?php endif;?>	
			</div>
			<div class="col-md-6">
				<?php if( get_next_post() ):?>
					<div class="next-link">
						<h3 class="title"><?php echo get_the_title( get_next_post() )?></h3>
						<h4 class="date"><?php echo get_the_date( 'F jS, Y', get_next_post() )?></h4>
						<?php next_post_link('%link'); ?>						
					</div>
				<?php endif;?>	
			</div>
		</div>
	</div>

<?php endwhile; else: endif;?>	