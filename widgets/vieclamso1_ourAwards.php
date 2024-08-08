<?php
if (!class_exists('vieclamso1_ourAwards')) :
	class vieclamso1_ourAwards extends WP_Widget
	{
		function __construct()
		{
			parent::__construct(
				'vieclamso1_ourAwards',
				esc_html_x('* [10] Our Awards page', 'widget name', 'wpshare247'),
				array(
					'classname' => 'vieclamso1_ourAwards',
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
<div class="page10 mt-3 d-flex flex-column" style="background-color: var(--background-color)">
    <div class="page10-content__title mb-2 d-flex flex-column justify-content-center align-items-center">
        <h4 class="page10-sub__title pt-5 pt-2 text-center" style="color: var(--primary-color);">OUR AWARDS</h4>
        <h1 class="page10-title pt-3 display-4 text-center" style=" font-weight: 500;">Giải thưởng tiêu biểu</h1>
    </div>
    <div class="page10-card col-12 col-md-12 mt-3 d-flex flex-md-row flex-column justify-content-center align-items-stretch"
        style="background-color: var(--background-color)">
        <!-- card1 -->
        <div class=" border mx-md-2 p-4 my-2 w-100 p-md-4 " style="background-color: white; border-radius: 20px; ">
            <div class="card__list-image ">
                <img class="img-fluid" src="assets/img/page10-card1,2.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="card__list-title pt-4">
                <h4 style="color: var(--primary-color);">BRAND</h4>
            </div>
            <div class="card__list-text pb-4">
                <h3 class="py-3" style=" font-weight: 500;">Top 100 Thương hiệu
                    hàng đầu Việt Nam 2020
                    tại Vietnam Top Brands
                    do HTV tổ chức</h3>
            </div>
            <div class="card__list-btn pb-5 ">
                <a class="btn" href="#"
                    style="background-color: var(--primary-color); color: white; font-size: 20px;">Đọc thêm</a>
            </div>
        </div>
        <!-- card2 -->
        <div class=" border mx-md-2 p-4 my-2 w-100 p-md-4" style="background-color: white; border-radius: 20px; ">
            <div class="card__list-image">
                <img class="img-fluid" src="assets/img/page10-card1,2.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="card__list-title pt-4">
                <h4 style="color: var(--primary-color);">STARTUP</h4>
            </div>
            <div class="card__list-text pb-4">
                <h3 class="py-3" style=" font-weight: 500;">Top 15 Startups được
                    Google lựa chọn tham
                    gia Google for Startups
                    Accelerator: Southeast
                    Asia</h3>
            </div>
            <div class="card__list-btn pb-5">
                <a class="btn" href="#"
                    style="background-color: var(--primary-color); color: white; font-size: 20px;">Đọc thêm</a>
            </div>
        </div>
        <!-- card3 -->
        <div class=" border mx-md-2 p-4 my-2 w-100 p-md-4" style="background-color: white; border-radius: 20px; ">
            <div class="card__list-image">
                <img class="img-fluid" src="assets/img/page10-card3.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
            <div class="card__list-title pt-4">
                <h4 style="color: var(--primary-color);">TECH</h4>
            </div>
            <div class="card__list-text pb-4">
                <h3 class="py-3" style=" font-weight: 500;">Bộ đôi giải thưởng Sản
                    phẩm công nghệ số
                    Make in Viet Nam 2022</h3>
            </div>
            <div class="card__list-btn by-5">
                <a class="btn" href="#"
                    style="background-color: var(--primary-color); color: white; font-size: 20px;">Đọc thêm</a>
            </div>
        </div>
        <!-- card4 -->
        <div class=" border mx-md-2 p-4 my-2 w-100 p-md-4 " style="background-color: white; border-radius: 20px; ">
            <div class="card__list-image">
                <img class="img-fluid" src="assets/img/page10-card4.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
            <div class="card__list-title pt-4">
                <h4 style="color: var(--primary-color);">BRAND</h4>
            </div>
            <div class="card__list-text pb-4">
                <h3 class="py-3" style=" font-weight: 500;">Cú đúp giải thưởng tại Lễ
                    vinh danh Top 10 doanh
                    nghiệp CNTT Việt Nam
                    2023</h3>
            </div>
            <div class="card__list-btn by-5">
                <a class="btn" href="#"
                    style="background-color: var(--primary-color); color: white; font-size: 20px;">Đọc thêm</a>
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