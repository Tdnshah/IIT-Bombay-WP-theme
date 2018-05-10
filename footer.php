<div class="container-fluid" id="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="footer1">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer1") ) : ?>
                <?php endif;?>
            </div>
            <div class="col-sm-3" id="footer2">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer2") ) : ?>
                <?php endif;?>
            </div>
            <div class="col-sm-3" id="footer3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer3") ) : ?>
                <?php endif;?>
            </div>
            <div class="col-sm-3" id="footer4">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer4") ) : ?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php
wp_footer();
?>
</div>
