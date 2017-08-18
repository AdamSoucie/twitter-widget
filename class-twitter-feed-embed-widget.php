<?php
class IC_Twitter_Feed_Embed_Widget extends WP_Widget
{
	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'ic_twitter_feed_embed_widget',
			'description' => 'Displays a Twitter feed',
		);
		parent::__construct( 'ic_twitter_feed_embed_widget', 'Twitter Feed Widget', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance )
	{
		// Get the current values
		$twitter_link		= ! empty( $instance['twitter_link'] ) ? $instance['twitter_link'] : __( '', TEXT_DOMAIN );

		?>
		<section class="widget twitter-embed-widget">
			<div class="widget-wrap">
				<h3 class="widget-title">Twitter</h3>
				<div class="widget-content">
					<a class="twitter-timeline" data-height="500" href="https://twitter.com/<?php echo $twitter_link; ?>">Tweets by <?php echo $twitter_link; ?></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</section>
		<?php
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance )
	{
		// Get the current values
		$twitter_link		= ! empty( $instance['twitter_link'] ) ? $instance['twitter_link'] : __( '', TEXT_DOMAIN );

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter_link' ); ?>"><?php _e( 'Page URL:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'twitter_link' ); ?>" name="<?php echo $this->get_field_name( 'twitter_link' ); ?>" type="text" value="<?php echo esc_attr( $twitter_link ); ?>">
		</p>
		<?php
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance )
	{
		$instance = array();

		$instance['twitter_link'] 	= ( ! empty( $new_instance['twitter_link'] ) ) ? strip_tags( $new_instance['twitter_link'] ) : '';

		return $instance;
	}
}
