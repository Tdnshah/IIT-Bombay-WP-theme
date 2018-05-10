<?php 
   //start loop
    while(have_posts()): the_post();
?>
    <div class='headingdeco' id="title">
        <h3><?php the_title() ?></h3>
    </div>
    <?php if (has_post_thumbnail( $post )){?>
    <div id="single-thumbnail">
        <?php  $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
     echo '<img src="' . $image_src[0]  . '" width="100%" height="400rem   />';?>
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