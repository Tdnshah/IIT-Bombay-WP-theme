<?php
/**
 * Template Name: Team
 */
get_header();
the_post();

// Get 'team' posts
$team_posts = get_posts( array(
	'post_type' => 'team',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'title', // Order alphabetically by name
) );

if ( $team_posts ):
?>

<div class="container">
<section class='headingdeco profiles' id="title" >
	<div class="intro">
		<h3><?php echo get_post_meta($post->ID, 'Team Name', true )?></h3>
	</div>
    </div>	
	<div class="container">
    <div class="row">
    <?php 
	foreach ( $team_posts as $post ): 
	setup_postdata($post);
	
	// Resize and CDNize thumbnails using Automattic Photon service
	$thumb_src = null;
	if ( has_post_thumbnail($post->ID) ) {
		$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
		$thumb_src = $src[0];
	}
	?>
	<article class="col-sm-1 profile">
    <div class="text-center">
		<div class="profile-header">
			<?php if ( $thumb_src ): ?>
			<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-fluid rounded-circle" >
			<?php endif; ?>
		</div>
		<div class="profile-content">
			<h6><?php the_title(); ?></h6>
			<?php the_field('team_position'); ?>
			<?php the_content(); ?>
		</div>
	
		<div class="profile-footer">
            <!-- <a href="mailto:<?php echo antispambot( get_field('team_email') ); ?>"><i class="dashicons dashicons-admin-links"></i></a> -->
            <a href="<?php echo get_field('team_website'); ?>" target='_blank'><i class="dashicons dashicons-admin-site"></i></a>
        </div>
        </div>
	</article>
    <?php endforeach; ?>
    </div>
    </div>
    <!-- /.profile -->

</section><!-- /.row -->
<?php endif; 

get_footer();
?>