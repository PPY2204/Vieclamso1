<?php
if (!class_exists('vieclamso1_AIInRecruitment')) :
	class vieclamso1_AIInRecruitment extends WP_Widget
	{
		function __construct()
		{
			parent::__construct(
				'vieclamso1_sAIInRecruitment',
				esc_html_x('* [3] AI In Recruitment Page', 'widget name', 'wpshare247'),
				array(
					'classname' => 'vieclamso1_AIInRecruitment',
					'description' => esc_html__('Giao diện home page', 'wpshare247'),
					'customize_selective_refresh' => true
				)
			);
		}

		//Hiển thị nội dung Widget
		function widget($args, $instance)
		{
			$defaults = array('title' => '', 'my_img_url' => '');

			$title_main = $instance['title_main'];
			$my_img_url = $instance['my_img_url'];
			$sub_title = $instance['sub_title'];
			$title = $instance['title'];
			$description = $instance['description'];
			$text_botton = $instance['text_botton'];
			$link_botton = $instance['link_botton'];
			$icon_botton = $instance['icon_botton'];

			echo $args['before_widget'];
?>
			<div class="page3 col-12 col-md-12 d-flex flex-column justify-content-center align-items-center">
				<div class="page3-title ">
					<h1 class="text-center py-5 display-4" style=" font-weight: 500;"> <?php echo $title_main; ?> </h1>
				</div>
				<div class="page3-wapper col-12 col-md-12 mx-4 border d-flex flex-column flex-md-row align-items-center" style="border-radius: 20px; background-color: var(--background-color)">
					<div class="page3-image col-md-6 ">
						<img src="<?php echo $my_img_url; ?>" alt="" style="width: 100%; height: 100%; transform: scaleX(-1);">
					</div>
					<div class="page3-content col-12 col-md-6 ">
						<div class="page3-content">
							<h4 class="page3-sub__title py-3" style="color: var(--primary-color);"><?php echo $sub_title; ?></h4>
							<h1 class="page3-title py-2 pl-3" style="border-left:7px solid var(--primary-color);">
								<?php echo $title; ?></h1>
							<p class="py-2 pr-5" style="font-size: 28px; font-weight: 400;">
								<?php echo $description; ?>
							</p>
							<button class="btn text-white mb-3" style="background-color: var(--primary-color); font-size: 23px;">
								<?php echo $text_botton; ?> <img src="<?php echo $icon_botton; ?>" alt=""> </button>
						</div>
					</div>
				</div>
			</div>
		<?php
			echo $args['after_widget'];
		}

		//Cập nhật dữ liệu các field của Widget
		function update($new_instance, $old_instance)
		{
			$instance = array();

			if (!empty($new_instance['title'])) {
				$instance['title'] = ($new_instance['title']);
			}

			if (!empty($new_instance['my_img_url'])) {
				$instance['my_img_url'] = ($new_instance['my_img_url']);
			}

			if (!empty($new_instance['sub_title'])) {
				$instance['sub_title'] = ($new_instance['sub_title']);
			}

			if (!empty($new_instance['title_main'])) {
				$instance['title_main'] = ($new_instance['title_main']);
			}

			if (!empty($new_instance['description'])) {
				$instance['description'] = ($new_instance['description']);
			}

			if (!empty($new_instance['text_botton'])) {
				$instance['text_botton'] = ($new_instance['text_botton']);
			}

			if (!empty($new_instance['link_botton'])) {
				$instance['link_botton'] = ($new_instance['link_botton']);
			}

			if (!empty($new_instance['icon_botton'])) {
				$instance['icon_botton'] = ($new_instance['icon_botton']);
			}

			return $instance;
		}


		//Khai báo các field của Widget
		function form($instance)
		{
			$defaults = array('title' => '', 'my_img_url' => '', 'sub_title' => '', 'title_main' => '', 'description' => '', 'text_botton' => '', 'link_botton' => '', 'icon_botton' => '');
			$instance = wp_parse_args($instance, $defaults); ?>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title_main')); ?>"><?php esc_html_e('Title Main', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['title_main']); ?>" name="<?php echo esc_attr($this->get_field_name('title_main')); ?>" id="<?php echo esc_attr($this->get_field_id('title_main')); ?>" />
			</p>

			<!-- Image field -->
			<?php Ws247_M_WG::helper_image_field('my_img_url', 'Image', $this, $instance); ?>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('sub_title')); ?>"><?php esc_html_e('Sub Title', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['sub_title']); ?>" name="<?php echo esc_attr($this->get_field_name('sub_title')); ?>" id="<?php echo esc_attr($this->get_field_id('sub_title')); ?>" />
			</p>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
			</p>

			<!-- textarea field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Textarea', 'vieclamso1'); ?></label>
				<textarea name="<?php echo esc_attr($this->get_field_name('description')); ?>" id="<?php echo esc_attr($this->get_field_id('description')); ?>" class="widefat"><?php echo esc_attr($instance['description']); ?></textarea>
			</p>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('text_botton')); ?>"><?php esc_html_e('Text Button', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['text_botton']); ?>" name="<?php echo esc_attr($this->get_field_name('text_botton')); ?>" id="<?php echo esc_attr($this->get_field_id('text_botton')); ?>" />
			</p>

			<!-- text field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('link_botton')); ?>"><?php esc_html_e('Link Button', 'vieclamso1'); ?></label>
				<input class="widefat" type="text" value="<?php echo esc_attr($instance['link_botton']); ?>" name="<?php echo esc_attr($this->get_field_name('link_botton')); ?>" id="<?php echo esc_attr($this->get_field_id('link_botton')); ?>" />
			</p>

			<!-- Image field -->
			<?php Ws247_M_WG::helper_image_field('icon_botton', 'Icon button', $this, $instance); ?>

<?php
		}
	}
endif;
