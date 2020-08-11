<?php


// Adds widget: Luoyang Latest Posts
class Luoyanglatestposts_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'luoyanglatestposts_widget',
			esc_html__( 'Luoyang Latest Posts', 'luoyang-companion' )
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Number of posts',
			'id' => 'count',
			'type' => 'text',
		),
	);

	public function widget( $args, $instance ) {
        echo $args['before_widget'];
        
		// Output generated fields
        
        $latest_posts = new WP_Query([
            'posts_per_page' => $instance['count'],
            'order' => 'desc'
        ])
        ?>
        <div class="blog-widget mb-4">
            <?php
                if ( ! empty( $instance['title'] ) ) {
                    echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
                }

                while($latest_posts->have_posts()) {
                    $latest_posts->the_post();
            ?>
            <div class="card border-0 mb-1">
                <div class="card-body row align-items-center">
                    <div class="col-4">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('medium',['class'=>'card-img']);?>
                        </a>
                    </div>
                    <div class="col-8">
                        <h6 class="my-2 font-size-14">
                            <a href="<?php the_permalink();?>">
                            <?php the_title();?>
                            
                            </a>
                        </h6>
                        <span class="font-size-14 text-muted"><?php echo get_the_date('d M Y');?></span>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

        <?php
		
        echo $args['after_widget'];
        wp_reset_postdata();
	}

	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$default = '';
			if ( isset($widget_field['default']) ) {
				$default = $widget_field['default'];
			}
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'luoyang-companion' );
			switch ( $widget_field['type'] ) {
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'luoyang-companion' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'luoyang-companion' );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'luoyang-companion' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
		$this->field_generator( $instance );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
}

function register_luoyanglatestposts_widget() {
	register_widget( 'Luoyanglatestposts_Widget' );
}
add_action( 'widgets_init', 'register_luoyanglatestposts_widget' );