<?php
if (!class_exists('vieclamso1_aboutUs')) :
	class vieclamso1_aboutUs extends WP_Widget
	{
		function __construct()
		{
			parent::__construct(
				'vieclamso1_aboutUs',
				esc_html_x('* [9] About Us page', 'widget name', 'wpshare247'),
				array(
					'classname' => 'vieclamso1_aboutUs',
					'description' => esc_html__('Giao diện home page', 'wpshare247'),
					'customize_selective_refresh' => true
				)
			);
		}

		//Hiển thị nội dung Widget
		function widget($args, $instance)
		{
			$defaults = array('title' => '', 'my_img_url' => '');

			// $title = $instance['title'];
			// $my_img_url = $instance['my_img_url'];

			echo $args['before_widget'];
?>
<div class="page9 col-12 col-md-12 d-flex flex-column justify-content-center align-items-center">
    <div class="page9-content__title d-flex flex-column justify-content-center align-items-center">
        <h4 class="page9-sub__title pt-5 py-2 text-center" style="color: var(--primary-color);">ABOUT US </h4>
        <h1 class="page9-title py-3 display-4 text-center" style=" font-weight: 500;">Về chúng tôi</h1>
    </div>
    <div class="page9-wapper col-12 col-md-11 mx-5 border d-flex flex-md-row flex-column align-items-center"
        style="border-radius: 20px; background-color: var(--background-color)">
        <div class="page9-content col-12 col-md-6">
            <p style="font-size: 23px; line-height: 60px ;">
                Việc làm số 1 Việt Nam là công ty hàng đầu trong lĩnh vực HR Tech tại Việt Nam, xoay
                quanh hệ sinh thái nhân sự với 4 sản phẩm chủ lực: <br>

                Nền tảng tuyển dụng thông minh Việc làm số 1, Nền tảng thiết lập và đánh giá năng
                lực nhân viên TestCenter, Nền tảng quản lý và gia tăng trải nghiệm nhân viên
                HappyTime và Giải pháp quản trị tuyển dụng hiệu suất cao SHring. <br>

                Việc làm số 1 đang sở hữu hơn 6,9 triệu người dùng, 190.000 khách hàng lớn và đã kết
                nối thành công hàng triệu lượt ứng viên mỗi năm tới các doanh nghiệp phù hợp. <br>

                Thông qua việc nghiên cứu và không ngừng phát triển năng lực công nghệ lõi vượt trội
                (đặc biệt là ứng dụng sâu Trí tuệ nhân tạo - AI), Tuyển dụng số 1 kỳ vọng mang tới các
                giải pháp nhân sự hiệu quả hơn nữa trong tương lai: tối ưu các trải nghiệm số cho ứng
                viên, từ đó giúp doanh nghiệp thu hút và giữ chân nhân tài, hướng tới một nền kinh tế
                Việt Nam phát triển bền vững.
            </p>
        </div>
        <div class="page9-image col-12 col-md-6">
            <img src="assets/img/page9.jpg" alt="" style="width: 100%; height: 100%;">
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

			return $instance;
		}


		//Khai báo các field của Widget
		function form($instance)
		{
			$defaults = array('title' => '', 'my_img_url' => '');
			$instance = wp_parse_args($instance, $defaults); ?>

<!-- text field -->
<p>
    <label
        for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Text', 'wpshare247'); ?></label>
    <input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>"
        name="<?php echo esc_attr($this->get_field_name('title')); ?>"
        id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
</p>

<!-- Image field -->
<?php Ws247_M_WG::helper_image_field('my_img_url', 'Image', $this, $instance); ?>

<?php
		}
	}
endif;