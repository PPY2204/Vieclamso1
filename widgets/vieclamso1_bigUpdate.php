<?php
if (!class_exists('vieclamso1_bigUpdate')) :
	class vieclamso1_bigUpdate extends WP_Widget
	{
		function __construct()
		{
			parent::__construct(
				'vieclamso1_bigUpdate',
				esc_html_x('* [2] Big Update Page', 'widget name', 'wpshare247'),
				array(
					'classname' => 'vieclamso1_bigUpdate',
					'description' => esc_html__('Giao diện home page', 'wpshare247'),
					'customize_selective_refresh' => true
				)
			);
		}

		//Hiển thị nội dung Widget
		function widget($args, $instance)
		{
			$defaults = array('title' => '', 'my_img_url' => '');

			$sub_title = $instance['sub_title'];
			$title = $instance['title'];
			$icon_button = $instance['icon_button'];
			$text_button = $instance['text_button'];
			$link_button = $instance['link_button'];
			$description = $instance['description'];
			$my_img_url = $instance['my_img_url'];

			echo $args['before_widget'];
?>
			<div class="page2 col-12 d-flex flex-column flex-md-row align-items-center">
				<div class="page2-content col-12 col-md-6 pl-md-5">
					<h4 class="page2-sub__title py-3" style="color: var(--primary-color);"> <?php echo $sub_title; ?> </h4>
					<h1 class="page2-title py-2 pl-3" style="border-left:7px solid var(--primary-color);">
						<?php echo $title; ?>
					</h1>
					<p class="py-2" style="font-size: 28px; font-weight: 400;"> <?php echo $description; ?> </p>
					<button class="btn text-white" style="background-color: var(--primary-color); font-size: 23px"><?php echo $text_button; ?> <img src="<?php echo $icon_button; ?>" alt="">
					</button>
				</div>
				<div class="page2-image col-12 col-md-6">
					<img src="<?php echo $my_img_url; ?>" alt="" width="100%" height="100%">
				</div>
			</div>
		<?php
			echo $args['after_widget'];
		}

		//Cập nhật dữ liệu các field của Widget
		function update($new_instance, $old_instance)
		{
			$instance = array();

			if (!empty($new_instance['sub_title'])) {
				$instance['sub_title'] = ($new_instance['sub_title']);
			}

			if (!empty($new_instance['title'])) {
				$instance['title'] = ($new_instance['title']);
			}

			if (!empty($new_instance['my_img_url'])) {
				$instance['my_img_url'] = ($new_instance['my_img_url']);
			}

			if (!empty($new_instance['text_button'])) {
				$instance['text_button'] = ($new_instance['text_button']);
			}

			if (!empty($new_instance['link_button'])) {
				$instance['link_button'] = ($new_instance['link_button']);
			}

			if (!empty($new_instance['description'])) {
				$instance['description'] = ($new_instance['description']);
			}

			if (!empty($new_instance['icon_button'])) {
				$instance['icon_button'] = ($new_instance['icon_button']);
			}

			return $instance;
		}


		//Khai báo các field của Widget
		function form($instance)
		{
			$defaults = array('sub_title' => '', 'title' => '', 'my_img_url' => '', 'text_button' => '', 'link_button' => '', 'icon_button' => '', 'description' => '');
			$instance = wp_parse_args($instance, $defaults); ?>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('sub_title')); ?>"><?php esc_html_e('Sub title', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['sub_title']); ?>" name="<?php echo esc_attr($this->get_field_name('sub_title')); ?>" id="<?php echo esc_attr($this->get_field_id('sub_title')); ?>" />
			</p>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
			</p>

			<!-- textarea field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Textarea', 'wpshare247'); ?></label>
				<textarea name="<?php echo esc_attr($this->get_field_name('description')); ?>" id="<?php echo esc_attr($this->get_field_id('description')); ?>" class="widefat"><?php echo esc_attr($instance['description']); ?></textarea>
			</p>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('text_button')); ?>"><?php esc_html_e('Text button', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['text_button']); ?>" name="<?php echo esc_attr($this->get_field_name('text_button')); ?>" id="<?php echo esc_attr($this->get_field_id('text_button')); ?>" />
			</p>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('link_button')); ?>"><?php esc_html_e('Link button', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['link_button']); ?>" name="<?php echo esc_attr($this->get_field_name('link_button')); ?>" id="<?php echo esc_attr($this->get_field_id('link_button')); ?>" />
			</p>

			<!-- Image field -->
			<?php Ws247_M_WG::helper_image_field('icon_button', 'Icon Button ', $this, $instance); ?>

			<!-- Image field -->
			<?php Ws247_M_WG::helper_image_field('my_img_url', 'Image', $this, $instance); ?>

<?php
		}
	}
endif;
