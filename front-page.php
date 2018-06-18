<?php
get_header();
if (get_theme_mod('iitb_theme_frontpage_slider_activation_setting') === "1"){
get_template_part('slider');
}
?>

<div class="container-fluid">

     <div class="container">
        <div class="row" id="header-panel">
            <div class="col-sm-4" id="info-header">
                <p style="font-size:1rem;">
                Welcome! The Parimal and Pramod Chaudhary Centre for Learning and Teaching  (PPCCLT) collaborates with faculty, students and education experts across Institute to foster excellence and innovation in teaching and learning. We offer faculty development programs, series of pedagogy seminars, hands-on workshops, professional development sessions for faculty and students to change their teaching- learning experience.
                </p>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/ppcclt-interactive.png" alt="" class="img-fluid" usemap="#ppcclt-goal" id="mapped-img">
                <map name="ppcclt-goal" id="Map">
                    <area alt="" title="" href="#area1" shape="poly" coords="146,7,203,7,232,56,204,105,146,105,118,56" data-maphilight='{"stroke":true,"fillColor":"cbf68c","fillOpacity":1}' />
                    <area alt="" title="" href="#area2" shape="poly" coords="253,69,310,69,337,118,311,167,253,168,224,121" />
                    <area alt="" title="" href="#area3" shape="poly" coords="253,191,311,193,337,241,310,289,253,290,226,241" />
                    <area alt="" title="" href="#area4" shape="poly" coords="146,253,203,253,232,303,203,349,147,350,118,304" />
                    <area alt="" title="" href="#area5" shape="poly" coords="39,190,95,192,122,240,95,289,38,288,11,241" />
                    <area alt="" title="" href="#area6" shape="poly" coords="39,68,96,67,124,117,95,167,38,167,11,118" />
                </map>
            </div>
            <div class="col-sm-4" id="info-panel">
                <div class="text-left" id="area1">
                    <h1>Involve Learners</h1>
                    <p> 
                    We advocate teaching-learning practices that gives learners ownership of their learning by involving them in the learning process   
                    </p>
                </div>
                <div class="text-left hidden" id="area2">
                    <h1>Stimulate Learning</h1>
                    <p> 
                    We focus of creating a student-centered learning environment that stimulates learning.   
                    </p>
                </div>
                <div class="text-left hidden" id="area3">
                <h1>Pedagogy Training</h1>
                    <p> 
                    We offer training for innovative, collaborative and evidence-based teaching-learning practices for effective learning.   
                    </p>
                </div>
                <div class="text-left hidden" id="area4">
                <h1>Inclusive Teaching</h1>
                <p> 
                We nurture a mindset that promotes respect and inclusion for a wide range of learners.   
                </p>
                </div>
                <div class="text-left hidden" id="area5">
                <h1>Research based educational practices</h1>
                <p> 
                We disseminate evidence-based teaching-learning practices and offer support to faculty for conducting education research. 
                </p>
                </div>
                <div class="text-left hidden" id="area6">
                <h1>Empathize With Learners</h1>
                <p> 
                ‘Innovation starts with empathy!’  We believe in empathizing with learners to foster innovations in teaching and learning.  
                </p>
                </div>
            </div>
        </div>

    </div>



</div>

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
