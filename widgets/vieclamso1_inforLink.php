<?php
if (!class_exists('vieclamso1_inforLink')) :
	class vieclamso1_inforLink extends WP_Widget
	{
		function __construct()
		{
			parent::__construct(
				'vieclamso1_inforLink',
				esc_html_x('* [12] Infor Link page', 'widget name', 'wpshare247'),
				array(
					'classname' => 'vieclamso1_inforLink',
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
<div class="page13 col-12 col-md-12 pt-5 d-flex flex-lg-row flex-column justify-content-between align-items-start ">
    <!-- COL1 -->
    <div class="d-flex pb-5 mx-2 flex-column align-items-start justify-content-center ">
        <div class="text-center pb-4 w-100">
            <a href="#"><img src="/assets/img/logo-icon.jpg" alt="" width="100%" height="100%"></a>
        </div>
        <div class="pb-4">
            <h1 class="des-brand font-weight-bold ">Kênh thông tin - việc làm số 1 tại Việt Nam</h1>
        </div>
        <div class=" d-flex justify-content-around w-100 align-items-center py-3">
            <a href="#"><img class="img-fluid " src="/assets/img/logo-gg.jpg" alt="" width="140%" height="100%"></a>
            <a href="#"><img class="img-fluid " src="/assets/img/logo-security.jpg" alt="" width="140%"
                    height="100%"></a>
            <a href="#"><img class="img-fluid " src="/assets/img/logo-registed.jpg" alt="" width="140%"
                    height="100%"></a>
        </div>
        <div class="py-4">
            <p style="font-size: 28px; font-weight: 500;">Ứng dụng tải xuống</p>
        </div>
        <div class="w-100 d-flex">
            <a href="#"><img class="img-fluid border" style="border-radius: 10px;" src="/assets/img/logo-appstore.jpg"
                    alt="" width="100%" height="100%"></a>
            <a href="#"><img class="img-fluid border" style="border-radius: 10px;" src="/assets/img/logo-ggplay.jpg"
                    alt="" width="100%" height="100%"></a>
        </div>
    </div>
    <!-- COL2-->
    <div class="mx-2 py-md-4  d-flex flex-column align-items-start justify-content-center ">
        <div class="col2-title">
            <h1>Về Vieclamso1</h1>
        </div>
        <div class="col2-link">
            <ol class="list-unstyled pt-4" style="font-size: 23px; font-weight: 400; color: black;">
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Tuyển dụng</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Góc báo chí</a></li>
                <li><a href="#">Chính sách bảo mật</a></li>
                <li><a href="#">Điều khoản dịch vụ</a></li>
                <li><a href="#">Quy chế hoạt động</a></li>
                <li><a href="#">Chương trình Rewards</a></li>
            </ol>
        </div>
    </div>
    <!-- COL3 -->
    <div class="mx-2 py-md-4 d-flex flex-column align-items-start justify-content-center ">
        <div class="col2-title">
            <h1>Ứng viên</h1>
        </div>
        <div class="col2-link">

            <ol class="list-unstyled pt-4" style="font-size: 23px; font-weight: 400; color: black;">
                <li><a href="#">Tìm việc làm</a></li>
                <li><a href="#">Khóa học</a></li>
                <li><a href="#">Trắc nghiệm MBTI</a></li>
                <li><a href="#">Hướng dẫn viết CV</a></li>
                <li><a href="#">Tư vấn sửa CV</a></li>
                <li><a href="#">Thiết kế CV</a></li>
                <li><a href="#">Dịch CV</a></li>
            </ol>
        </div>
    </div>
    <!-- COL4 -->
    <div class="mx-2 py-md-4 d-flex flex-column align-items-start justify-content-center">
        <div class="col2-title">
            <h1>Đối tác</h1>
        </div>
        <div class="col2-link">
            <ol class="list-unstyled pt-4" style="font-size: 23px; font-weight: 400; color: black;">
                <li><a href="#">Doanh nghiệp</a></li>
                <li><a href="#">Trường đại học</a></li>
                <li><a href="#">Các CLB, đoàn thể</a></li>
            </ol>
        </div>
        <div class="page13__social d-flex w-100 my-md-5 py-5">
            <a href="#"><img class="img-fluid pr-3" src="/assets/img/facebook.png" alt="" width="70px"
                    height="70px"></a>
            <a href="#"><img class="img-fluid pr-3" src="/assets/img/twitter.png" alt="" width="70px" height="70px"></a>
            <a href="#"><img class="img-fluid pr-3" src="/assets/img/linkedin.png" alt="" width="70px"
                    height="70px"></a>
            <a href="#"><img class="img-fluid pr-3" src="/assets/img/youtube.png" alt="" width="70px" height="70px"></a>
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