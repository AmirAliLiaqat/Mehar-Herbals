<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meharHerbals
 */
?>

	<aside class="sidebar">
		<div class="sidebar_widget pb-5">
			<div class="widget_title text-center my-3">
				<h4 class="site_font">Search</h4>
			</div><!--widget_title-->
			<?php echo get_search_form(); ?>
		</div><!--sidebar_widget-->
		<div class="sidebar_widget py-5">
			<div class="widget_title text-center my-3">
				<h4 class="site_font">Follow Us</h4>
			</div><!--widget_title-->
			<div class="widget_links text-center py-3">
				<a href="#" class="mx-2"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="#" class="mx-2"><i class="fa-brands fa-twitter"></i></a>
				<a href="#" class="mx-2"><i class="fa-brands fa-linkedin-in"></i></a>
				<a href="#" class="mx-2"><i class="fa-brands fa-youtube"></i></a>
				<a href="#" class="mx-2"><i class="fa-brands fa-instagram"></i></a>
			</div><!--widget_links-->
		</div><!--sidebar_widget-->
		<div class="sidebar_widget py-5">
			<div class="widget_title text-center my-3">
				<h4 class="site_font">Categories</h4>
			</div><!--widget_title-->
			<div class="list-unstyled contact-ul">
				<?php 
					echo wp_list_categories(array(
						'title_li'         => '',
						'style'            => 'none',
						'echo'             => false,
						'show_count'       => 1,
						'show_option_all'  => '',
						'show_option_none' => __( 'No categories' ),
						'style'            => 'list',
						'taxonomy'         => 'category',
					) ); 
				?>
			</div><!--contact-ul-->
		</div><!--sidebar_widget-->
		<div class="sidebar_widget py-5">
			<div class="widget_title text-center my-3">
				<h4 class="site_font">Feeds</h4>
			</div><!--widget_title-->
			<ul class="list-unstyled text-start mt-5 mb-0">
				<?php
					$recent_posts = wp_get_recent_posts(array(
						'numberposts' => 5,
						'post_status' => 'publish'
					));
					foreach( $recent_posts as $post_item ) : ?>
						<li>
							<div class="recent_posts d-flex">
								<div class="post_thumb">
								 	<a href="<?php echo get_permalink($post_item['ID']); ?>"><?php echo get_the_post_thumbnail($post_item['ID'], 'small') ?></a>
								</div><!--post_thumb-->
								<div class="post_details px-3">
									<h6><a href="<?php echo get_permalink($post_item['ID']) ?>" class="site_text"><?php echo $post_item['post_title'] ?></a></h6>
									<p class="px-2"><i class="fa fa-clock-o"></i> <?php echo get_the_date('M d, Y'); ?></p>
								</div><!--post_details-->
							</div><!--recent_posts-->
						</li>
				<?php endforeach; ?>
			</ul>
		</div><!--sidebar_widget-->
		<div class="sidebar_widget py-5">
			<div class="widget_title text-center my-3">
				<h4 class="site_font">Tags</h4>
			</div><!--widget_title-->
			<div class="tags">
				<?php 
					$tags = get_tags(array(
						'taxonomy' => 'post_tag',
						'orderby' => 'name'
					)); 

					if($tags) {
						foreach ($tags as $tag):
							echo $output = '<a href="'. get_term_link($tag).'">'. $tag->name .'</a>';
						endforeach;
					}
				?>
			</div><!--tags-->
		</div><!--sidebar_widget-->
	</aside><!--sidebar-->
