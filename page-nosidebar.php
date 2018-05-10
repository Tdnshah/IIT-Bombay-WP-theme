<?php /* Template Name: Widthout Sidebar */ ?>
<?php   
 get_header();?>
<div class="container-fluid" id="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                <?php get_template_part( 'page-content' );?>
                </div>
            </div>
            
        </div>
    </div>
</div>
 <?php
 get_footer();
 ?>