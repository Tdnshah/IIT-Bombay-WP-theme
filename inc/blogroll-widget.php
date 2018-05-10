<?php 
class blogroll_widget extends WP_Widget{
    //constructor
    /**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'blogroll_widget',
			'description' => 'Widget for get selected category blog rolls',
		);
		parent::__construct( 'blogroll_widget', 'Blog Roll', $widget_ops );
    }
    
    /**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        $args = array(
            'post_type'         => array('post'),   /* the names of you custom post types */
            'category_name'     => 'r&d',
            'posts_per_page'    => 4                     /* get all posts */
        );
        $posts = new WP_Query($args);
        $posts_count = $posts->post_count;
        
        ?>
        <div class="blockquote">
                <h3><?php echo $instance['title'];?></h3>
        </div>
        <div class="row">
        
        <?php while($posts->have_posts()):$posts->the_post();
        if ($posts_count >= "4"){?>
            <div class="col-sm-3">
        <?php
        }
        elseif ($posts_count >= "3"){
        ?>
            <div class="col-sm-4">
        <?php
        }
        elseif ($posts_count >= "2"){
        ?> 
            <div class="col-sm-6">
        <?php
        }
        else{?>
            <div class="col-sm-12">
        <?php
        }
        ?>
            <div class="content"> 
            
                <div class="postimage">
                    <a href="<?php the_permalink()?>">
                        <img src="<?php echo get_the_post_thumbnail_url()?> " width="100%" height = "150rem";>
                    </a>
                </div>  
                <div class="headingdeco">
                    <a href="<?php the_permalink()?>">
                    <?php the_title( );?></a>
                </div>
                <div class="excrept">
                    <?php echo wp_trim_words( get_the_content(),50, '...' );?>
                </div>
            </div>   
        </div>
<?php
   endwhile; 
   wp_reset_postdata();
?>

</div>
<?php
}
    

    /**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
    function form( $instance ) {
        /* Default Widget Settings */
        $defaults = array(
            'title' => 'Title'
        );
        $instance = wp_parse_args( (array) $instance, $defaults ); 
    ?>
    
        <!-- Widget Title -->
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'thstlang') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
        </p>
    <?php 
    }

    /**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        // Fields
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }
} 
