<?php
if (!class_exists('vieclamso1_values')) :
	class vieclamso1_values extends WP_Widget
	{
		function __construct()
		{
			parent::__construct(
				'vieclamso1_values',
				esc_html_x('* [8] Values page', 'widget name', 'wpshare247'),
				array(
					'classname' => 'vieclamso1_values',
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
<div class="page8 pb-5" style="background-color: var(--background-color); padding-top: 280px;">
    <div class="page8-content__title d-flex flex-column justify-content-center align-items-center">
        <h4 class="page8-sub__title pt-5 py-2 text-center" style="color: var(--primary-color);">VALUES</h4>
        <h1 class="page8-title py-3 display-4 text-center" style=" font-weight: 500;">Giá trị khi sử dụng vieclamso1
            Smart Recruitment Platform</h1>
    </div>
    <div class="page8-content__card d-flex flex-md-row flex-column justify-content-around align-items-stretch">
        <div class="page8-content__card1 col-12 col-md-5 p-5 m-md-5 m-0 d-flex flex-column"
            style=" background-color: white; border-radius: 20px;">
            <div class="page8__content__card1__img pb-5">
                <img src="/assets/img/page8-card1.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="page8__content__card1__title pt-5">
                <h1 class="page3-title py-2 pl-3" style="border-left:9px solid var(--primary-color);">Đối với Doanh
                    nghiệp</h1>
            </div>
            <div>
                <div class="wapper__content__card1__list pt-5">
                    <ul class="list-unstyled">
                        <li class="pb-4" style="font-size: 22px;">
                            <p>Đưa tuyển dụng trở thành lợi thế cạnh tranh của doanh nghiệp:<strong> gia tăng cơ hội
                                    tuyển đúng người</strong>, giúp thúc đẩy hoạt động kinh doanh hiệu quả, hướng đến
                                chuyển đổi số thành công.</p>
                        </li>
                        <li class="pb-4" style="font-size: 22px;">
                            <p>Chuẩn hóa toàn bộ quy trình tuyển dụng thống nhất và bài bản với <b>Talent Acquisition
                                    Funnel.</b></p>
                        </li>
                        <li class="pb-4" style="font-size: 22px;">
                            <p>Xây dựng <strong> thương hiệu tuyển dụng </strong> uy tín, chuyên nghiệp.</p>
                        </li>
                        <li class="pb-4" style="font-size: 22px;">
                            <p><strong>Tiết kiệm</strong> thời gian, chi phí cho hoạt động tuyển dụng.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page8-content__card2 col-12 col-md-5 p-5 my-5 mr-md-5 ml-md-n5 m-0 d-flex flex-column"
            style="padding: 60px; background-color: white; border-radius: 20px;">
            <div class="page8__content__card2__img pb-5">
                <img src="/assets/img/page8-card2.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="page8__content__card2__title pt-5">
                <h1 class="page3-title py-2 pl-3" style="border-left:9px solid var(--primary-color);">Đối với Doanh
                    nghiệp</h1>
            </div>
            <div>
                <div class="page8__content__card2__list pt-5">
                    <ul class="list-unstyled">
                        <li class="pb-4" style="font-size: 22px;">
                            <p> <strong>Quản lý tập trung</strong> tất cả các hoạt động tạo ra hiệu quả cho mỗi vị trí
                                tuyển dụng theo chiến dịch tuyển dụng.</p>
                        </li>
                        <li class="pb-4" style="font-size: 22px;">
                            <p>Đăng tin tuyển dụng, tạo &amp; quản lý <strong>nguồn ứng viên</strong> hiệu quả.</p>
                        </li>
                        <li class="pb-4" style="font-size: 22px;">
                            <p>Đánh giá ứng viên toàn diện dựa trên dữ liệu cụ thể, giúp định tuyển đưa ra quyết dụng
                                chính xác, <strong>giảm tỷ lệ tuyển sai người.</strong></p>
                        </li>
                        <li class="pb-4" style="font-size: 22px;">
                            <p>Có <strong>tư duy ứng dụng công nghệ</strong> trong tuyển dụng, xử lý nghiệp vụ tuyển
                                dụng nhanh chóng, thông minh, tổ chức công việc hiệu quả.</p>
                        </li>
                        <li class="pb-4" style="font-size: 22px;">
                            <p>Chủ động lên kế hoạch &amp; <strong> tối ưu chi phí tuyển dụng</strong> theo các số liệu
                                đo lường.</p>
                        </li>
                    </ul>
                </div>
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