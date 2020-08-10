<?php

// Adds widget: Luoyang Categories
class LuoyangCategories_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'luoyangcategories_widget',
			esc_html__( 'Luoyang Categories', 'luoyang-companion' )
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Number of Category',
			'id' => 'cat_num',
			'default' => '10',
			'type' => 'text',
		),
		array(
			'label' => 'Display Post Count',
			'id' => 'post_count',
			'default' => '1',
			'type' => 'checkbox',
		),
    );
    
    private function get_all_categories( $hide_empty = true, $orderby = 'name', $order = 'desc') {
        $_categories = get_categories( array(
            'hide_empty' => $hide_empty,
            'orderby'    => $orderby,
            '$order'     => $order,
        ) );

        return $_categories;
    }

	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		// Output generated fields
		/* echo '<p>'.$instance['cat_num'].'</p>';
        echo '<p>'.$instance['post_count'].'</p>'; */
        
        $count = (int) $instance['cat_num'];
        $categories = $this->get_all_categories();
        
        $count = count($categories)<=$count?count($categories):$count;
        ?>
        <div class="list-group list-group-right-arrow">
            <?php
            for($i=0; $i<$count; $i++){
                $category_url = get_term_link($categories[$i]->term_id);
                $post_count = $instance['post_count']==1 ? '('.$categories[$i]->count.')':'';
            ?>
            <a href="<?php echo esc_url($category_url);?>" class="list-group-item"><?php echo esc_html($categories[$i]->name);?> 
            <?php echo esc_html($post_count);?>
            </a>
            <?php
            }
            ?>
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
				case 'checkbox':
					$output .= '<p>';
					$output .= '<input class="checkbox" type="checkbox" '.checked( $widget_value, true, false ).' id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" value="1">';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'luoyang-companion' ).'</label>';
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

function register_luoyangcategories_widget() {
	register_widget( 'LuoyangCategories_Widget' );
}
add_action( 'widgets_init', 'register_luoyangcategories_widget' );