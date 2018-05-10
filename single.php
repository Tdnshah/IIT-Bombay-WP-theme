<?php get_header();?>
<div class="container-fluid" id="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="content">
                <?php get_template_part( 'content' );?>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="sidebar">
                <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>