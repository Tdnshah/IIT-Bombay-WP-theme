<?php
get_header();
if (get_theme_mod('iitb_theme_frontpage_slider_activation_setting') === "1"){
get_template_part('slider');
}
?>
<div class="container-fluid" id="fp-content-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" id="no-padding">  
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("events") ) : ?>
            <?php endif;?>
            </div>
            <div class="col-sm-6" id="no-padding">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("announcements") ) : ?>
            <?php endif;?>
            </div>
        </div>
    </div>

    <div class="container" id="fp-hero-section">
        <div class="row">
            <div class="col-sm-12">
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("herosection1") ) : ?>
            <?php endif;?>
	    </div>
        </div>
    </div>
<div class="container">
    <?php 
   //start loop
    while(have_posts()): the_post();
?>
    <?php if (get_theme_mod('iitb_theme_frontpage_Title_setting') === "1") {?>
        <div class='headingdeco' id="title">
        <?php if(is_page_template( 'FullWidth' )){?>
            <h3 style="text-align:left"><?php the_title() ?></h3> 
        <?php } 
        ?>
        <h3><?php the_title() ?></h3>
    </div>
    
    <?php } ?>

    <?php if (has_post_thumbnail( $post )){ ?>
    <div id="single-thumbnail">
        <?php  $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'small' );
     echo '<img src="' . $image_src[0]  . '" width="100%" height="400rem ;" />';?>
    </div>
    <?php }?>
    <div id="single-content">
    <p>
        <?php the_content() ?>
    </p>
    </div>
    <?php
        endwhile;
    ?>
  
  </div>

<?php
get_footer(); 
?>
