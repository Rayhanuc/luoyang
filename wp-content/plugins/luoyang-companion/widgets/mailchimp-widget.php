<?php

// Adds widget: Luoyang Mailchimp
class LuoyangMailchimp_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'luoyangmailchimp_widget',
			esc_html__( 'Luoyang Mailchimp', 'luoyang-companion' )
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Description',
			'id' => 'description',
			'type' => 'textarea',
		),
		array(
			'label' => 'Form Submission URL',
			'id' => 'form_url',
			'type' => 'text',
		),
	);

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		

		// Output generated fields
		/* echo '<p>'.$instance['description'].'</p>';
        echo '<p>'.$instance['form_url'].'</p>'; */
        
        ?>
        <div class="card card-body border-0">
            <?php
            if ( ! empty( $instance['title'] ) ) {
                echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
            }
            ?>
            <p class="text-muted font-size-14">
                <?php echo esc_html($instance['description']);?>
            </p>
            <form target="_blank" action="<?php echo esc_url($instance['form_url']);?>">
                <div class="form-group mb-0 mt-3">
                    <div class="icon-field-right">
                        <i class="fa fa-paper-plane text-muted"></i>
                        <input type="email" name="EMAIL" class="form-control" placeholder="<?php _e('Enter your email address','luoyang-companion');?>">
                    </div>
                </div>
            </form>
        </div>


        <?php
		
		echo $args['after_widget'];
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
				case 'textarea':
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'luoyang-companion' ).':</label> ';
					$output .= '<textarea class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" rows="6" cols="6" value="'.esc_attr( $widget_value ).'">'.$widget_value.'</textarea>';
					$output .= '</p>';
					break;
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

function register_luoyangmailchimp_widget() {
	register_widget( 'LuoyangMailchimp_Widget' );
}
add_action( 'widgets_init', 'register_luoyangmailchimp_widget' );