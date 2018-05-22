<?php
get_header();
get_template_part('slider');
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
            <div class="col-sm-12"
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("herosection1") ) : ?>
            <?php endif;?>
	    </div>
        </div>
    </div>
<?php
get_footer(); 
?>
