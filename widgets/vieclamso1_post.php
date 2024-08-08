<?php
if (!class_exists('vieclamso1_post')) :
	class vieclamso1_post extends WP_Widget
	{
		function __construct()
		{
			parent::__construct(
				'vieclamso1_post',
				esc_html_x('* [1] Post page', 'widget name', 'wpshare247'),
				array(
					'classname' => 'vieclamso1_post',
					'description' => esc_html__('Giao diện home page', 'wpshare247'),
					'customize_selective_refresh' => true
				)
			);
		}

		//Hiển thị nội dung Widget
		function widget($args, $instance)
		{
			$defaults = array('title' => '', 'my_img_url' => '');

			$title = $instance['title'];
			$icon_button = $instance['icon_button'];
			$text_button = $instance['text_button'];
			$link_button = $instance['link_button'];
			$my_img_url = $instance['my_img_url'];

			echo $args['before_widget'];
?>
<div class="page1 col-12 d-flex flex-column justify-content-center align-items-center">
    <div class="page1-title py-5 d-flex flex-column align-items-center">
        <div class="display-4 font-weight-bold text-center"> <?php echo $title; ?> </div>
        <div class="display-4 font-weight-bold text-center">tìm kiếm ứng viên hiệu quả </div>
    </div>
    <div class="page1-btn_post">
        <button class="btn text-white " style=" font-size: 20px; background-color: var(--primary-color);">
            <?php echo $text_button; ?>
            <img src="<?php echo $icon_button; ?>" alt="">
        </button>
    </div>
    <div class="page1-image py-4">
        <img src="<?php echo $my_img_url; ?>" alt="" class="img-fluid">
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
			if (!empty($new_instance['text_button'])) {
				$instance['text_button'] = ($new_instance['text_button']);
			}
			if (!empty($new_instance['link_button'])) {
				$instance['link_button'] = ($new_instance['link_button']);
			}
			if (!empty($new_instance['icon_button'])) {
				$instance['icon_button'] = ($new_instance['icon_button']);
			}

			return $instance;
		}


		//Khai báo các field của Widget
		function form($instance)
		{
			$defaults = array('title' => '', 'my_img_url' => '', 'icon_button' => '', 'text_button' => '', 'link_button' => '');
			$instance = wp_parse_args($instance, $defaults); ?>

<!-- text field -->
<p>
    <label
        for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Text', 'vieclamso1'); ?></label>
    <input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>"
        name="<?php echo esc_attr($this->get_field_name('title')); ?>"
        id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
</p>
<!-- Image field -->
<?php Ws247_M_WG::helper_image_field('icon_button', 'Image', $this, $instance); ?>

<!-- text field -->
<p>
    <label
        for="<?php echo esc_attr($this->get_field_id('text_button')); ?>"><?php esc_html_e('Title button', 'vieclamso1'); ?></label>
    <input class="widefat" type="text" value="<?php echo esc_attr($instance['text_button']); ?>"
        name="<?php echo esc_attr($this->get_field_name('text_button')); ?>"
        id="<?php echo esc_attr($this->get_field_id('text_button')); ?>" />
</p>

<!-- text field -->
<p>
    <label
        for="<?php echo esc_attr($this->get_field_id('link_button')); ?>"><?php esc_html_e('Link button', 'vieclamso1'); ?></label>
    <input class="widefat" type="text" value="<?php echo esc_attr($instance['link_button']); ?>"
        name="<?php echo esc_attr($this->get_field_name('link_button')); ?>"
        id="<?php echo esc_attr($this->get_field_id('link_button')); ?>" />
</p>

<!-- Image field -->
<?php Ws247_M_WG::helper_image_field('my_img_url', 'Image', $this, $instance); ?>
<?php
		}
	}
endif;