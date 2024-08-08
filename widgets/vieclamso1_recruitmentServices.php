<?php
if (!class_exists('vieclamso1_recruitmentServices')) :
    class vieclamso1_recruitmentServices extends WP_Widget
    {
        function __construct()
        {
            parent::__construct(
                'vieclamso1_recruitmentServices',
                esc_html_x('* [5] Recruitment Services Page', 'widget name', 'wpshare247'),
                array(
                    'classname' => 'vieclamso1_recruitmentServices',
                    'description' => esc_html__('Giao diện home page', 'wpshare247'),
                    'customize_selective_refresh' => true
                )
            );
        }

        //Chỉ cần khai báo các field tại đây và không cần làm gì thêm----------------------------------------
        function init_repeat_sortable_fields()
        {
            $arr_fields = array(
                'f_repeat_image' => array('type' => 'image', 'label' => 'Img'),
                'f_repeat_text1' => array('type' => 'text', 'label' => 'Kiểu text 1'),
                'f_repeat_textarea1' => array('type' => 'textarea', 'label' => 'List 1'),
                'f_repeat_textarea2' => array('type' => 'textarea', 'label' => 'List 2'),
                'f_repeat_textarea3' => array('type' => 'textarea', 'label' => 'List 3'),
                'f_repeat_textarea4' => array('type' => 'textarea', 'label' => 'List 4'),
                'f_repeat_icon_list' => array('type' => 'image', 'label' => 'Icon List'),
                'f_repeat_text_button' => array('type' => 'text', 'label' => 'Text button'),
                'f_repeat_link_button' => array('type' => 'text', 'label' => 'Link button'),
                'f_repeat_icon_button' => array('type' => 'image', 'label' => 'Icon button'),

                // 'f_repeat_select' => array(
                //     'type' => 'select',
                //     'label' => 'Kiểu chọn',
                //     'options' => array('asc' => 'Tăng', 'desc' => 'Giảm', 'random' => 'Ngẫu nhiên', '10' => 'Cách 10 ngày')
                // ),

                // 'f_repeat_select_page_id' => array(
                //     'type' => 'page',
                //     'label' => 'Trang'
                // ),

                // 'f_repeat_select_post_id' => array(
                //     'type' => 'post',
                //     'label' => 'Bài viết'
                // ),

                // 'f_repeat_select_cf7' => array(
                //     'type' => 'contact_form_7',
                //     'label' => 'Contact form 7'
                // ),

                // 'f_repeat_select_custom_post_type_id' => array(
                //     'type' => 'post_type',
                //     'post_type' => 'your-post-type',
                //     'label' => 'Your custom post type'
                // ),


            );
            return $arr_fields;
        }
        //End Chỉ cần khai báo các field tại đây và không cần làm gì thêm----------------------------------------
        //Hiển thị nội dung Widget
        function widget($args, $instance)
        {
            $defaults = array('main_sub_title' => '', 'main_title' => '');

            $main_sub_title = $instance['main_sub_title'];
            $main_title = $instance['main_title'];
            $data_field = $instance['recruitmentServices_repeat_sortable_data_1'];
            $arr_data = json_decode($data_field, true);
            echo $args['before_widget'];
?>
<div class="page5 my-5 col-12">
    <div class="page5-content col-12 col-md-12 ">
        <div class="page5-content d-flex flex-column justify-content-center align-items-center">
            <h4 class="page5-sub__title pt-5 py-2 text-center" style="color: var(--primary-color);">
                <?php echo $main_sub_title; ?>
            </h4>
            <h1 class="page3-title py-3 display-4 text-center" style=" font-weight: 500;"> <?php echo $main_title; ?>
            </h1>
        </div>
    </div>
    <?php
                if ($arr_data) {
                    foreach ($arr_data as $k => $arr_item) {
                        $f_repeat_text1 = $arr_item['f_repeat_text1']['val'];
                        $f_repeat_image_url = $arr_item['f_repeat_image']['val'];
                        $f_repeat_icon_list = $arr_item['f_repeat_icon_list']['val'];
                        $f_repeat_textarea1 = $arr_item['f_repeat_textarea1']['val'];
                        $f_repeat_textarea2 = $arr_item['f_repeat_textarea2']['val'];
                        $f_repeat_textarea3 = $arr_item['f_repeat_textarea3']['val'];
                        $f_repeat_textarea4 = $arr_item['f_repeat_textarea4']['val'];

                        $f_repeat_text_button = $arr_item['f_repeat_text_button']['val'];
                        $f_repeat_link_button = $arr_item['f_repeat_link_button']['val'];
                        $f_repeat_icon_button = $arr_item['f_repeat_icon_button']['val'];
                        $zigzag = $k % 2 == 0 ? 'flex-md-row' : 'flex-md-row-reverse';
                        // $f_repeat_select = $arr_item['f_repeat_select']['val'];
                        // $f_repeat_select_cf7_id = $arr_item['f_repeat_select_cf7']['val'];
                ?>
    <!-- Đăng tin -->
    <style>
    .content-list ul li::before {
        content: url(<?php echo $f_repeat_icon_list; ?>);
    }
    </style>
    <div class="page5-wapper <?php echo $zigzag; ?> pt-5 d-flex flex-column justify-content-around align-items-center">
        <div class="col-12 col-md-6 page5-wapper__img text-center">
            <img class="img-fluid" src="<?php echo $f_repeat_image_url; ?>" alt=""
                style="max-width: 100%; height: auto;">
        </div>
        <div class="col-12 col-md-6 page5-wapper__content pl-5 ">
            <div class="content-title">
                <h1> <?php echo $f_repeat_text1; ?> </h1>
            </div>
            <div class="content-list pt-5">
                <ul class="list-unstyled">
                    <li class="pb-4" style="font-size: 22px;"> <?php echo $f_repeat_textarea1; ?></li>
                    <li class="pb-4" style="font-size: 22px;"> <?php echo $f_repeat_textarea2; ?></li>
                    <li class="pb-4" style="font-size: 22px;"> <?php echo $f_repeat_textarea3; ?></li>
                    <li class="pb-4" style="font-size: 22px;"> <?php echo $f_repeat_textarea4; ?></li>
                </ul>
            </div>
            <div class="card-btn pb-5">
                <button class="btn text-white"><?php echo $f_repeat_text_button; ?> <img
                        src="<?php echo $f_repeat_icon_button; ?>" alt=""> </button>
            </div>
        </div>
    </div>
    <?php
                    }
                }
                ?>


    <!-- Top Job
                <div class="page5-wapper d-flex flex-column flex-md-row justify-content-around align-items-center py-5">
                    <div class="col-12 col-md-6 page5-wapper__content ">
                        <div class="content-title">
                            <h1>Top Jobs &amp; Standard Plus - Đăng tin tuyển dụng</h1>
                        </div>
                        <div class="content-list py-5">
                            <ul class="list-unstyled">
                                <li class="pb-4" style="font-size: 22px;"> Tăng lượt tiếp cận người tìm việc thêm 300% khi đăng
                                    tuyển.</li>
                                <li class="pb-4" style="font-size: 22px;"> Tin tuyển dụng hiển thị ở những vị trí nổi bật.</li>
                                <li class="pb-4" style="font-size: 22px;"> Đẩy tin tuyển dụng lên vị trí đầu trong kết quả tìm kiếm
                                    việc làm trên trang web đăng tin tuyển dụng.</li>
                                <li class="pb-0" style="font-size: 22px;"> Tự động gợi ý tin tuyển dụng với ứng viên phù hợp, giúp
                                    tuyển dụng hiệu quả hơn.</li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <button class="btn text-white">Tư vấn tuyển dụng miễn phí <img src="/assets/img/arrow_right-icon.jpg" alt=""> </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 page5-wapper__img text-center">
                        <img src="assets/img/page5-goal.jpg" alt="" style="width: 100%; height: 100%;">
                    </div>
                </div>
                Top Credit
                <div class="page5-wapper d-flex flex-column flex-md-row justify-content-around align-items-center py-5">
                    <div class="col-12 col-md-6 page5-wapper__img text-center">
                        <img src="assets/img/page5-creadit.jpg" alt="" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col-12 col-md-6 page5-wapper__content ">
                        <div class="content-title">
                            <h1>Top Credit - Nạp Credit mở CV ứng viên</h1>
                        </div>
                        <div class="content-list pt-5">
                            <ul class="list-unstyled">
                                <li class="pb-4" style="font-size: 22px;"> Chủ động tiếp cận 6.900.000+ CV ứng viên với hơn 50% ứng
                                    viên có kinh nghiệm từ 3 năm trở lên.</li>
                                <li class="pb-4" style="font-size: 22px;"> Tùy chỉnh các tiêu chí tìm kiếm ứng viên tài năng theo
                                    mong muốn: ngành nghề, vị trí tuyển dung, địa điểm làm việc, tính cách ứng viên.</li>
                                <li class="pb-4" style="font-size: 22px;"> Ứng dụng AI/Machine Learning giúp tìm kiếm ứng viên chính
                                    xác, nhanh chóng với mức độ phù hợp tăng theo số CV tìm kiếm.</li>
                                <li class="pb-4" style="font-size: 22px;"> Duy nhất tại tuyendungso1 có chính sách bảo hành dịch vụ
                                    với CV sai thông tin.</li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <button class="btn text-white">Tư vấn tuyển dụng miễn phí <img src="/assets/img/arrow_right-icon.jpg" alt=""> </button>
                        </div>
                    </div>
                </div>
                CV đề xuất
                <div class="page5-wapper d-flex flex-column flex-md-row justify-content-around align-items-center py-5">
                    <div class="col-12 col-md-6 page5-wapper__content">
                        <div class="content-title">
                            <h1>CV đề xuất</h1>
                        </div>
                        <div class="content-list py-5">
                            <ul class="list-unstyled">
                                <li class="pb-4" style="font-size: 22px;"> Đa dạng hóa nguồn CV ứng viên mà không cần mất công tìm
                                    kiếm ứng viên.</li>
                                <li class="pb-4" style="font-size: 22px;"> Tiết kiệm thời gian tuyển dụng nhân sự.</li>
                                <li class="pb-4" style="font-size: 22px;"> Tỷ lệ ứng viên phù hợp lên đến 40%.</li>
                                <li class="pb-0" style="font-size: 22px;"> Dịch vụ có cam kết CV đang tìm kiếm công việc.</li>
                            </ul>
                        </div>
                        <div class="card-btn pb-5">
                            <button class="btn text-white">Tư vấn tuyển dụng miễn phí <img src="/assets/img/arrow_right-icon.jpg" alt=""> </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 page5-wapper__img text-center ">
                        <img src="assets/img/page5-search.jpg" alt="" style="width: 100%; height: 100%;">
                    </div>
                </div>
                Top Branding
                <div class="page5-wapper d-flex flex-column flex-md-row justify-content-around align-items-center py-5 mt-5">
                    <div class="col-12 col-md-6 page5-wapper__img text-center">
                        <img src="assets/img/page5-branding.png" alt="" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col-12 col-md-6 page5-wapper__content ">
                        <div class="content-title">
                            <h1>Top Branding - Truyền thông thương hiệu hàng đầu</h1>
                        </div>
                        <div class="content-list pt-5">
                            <ul class="list-unstyled">
                                <li class="pb-4" style="font-size: 22px;"> Giúp thương hiệu, sản phẩm, dịch vụ, chương trình của
                                    doanh nghiệp được tiếp cận với hơn 5 triệu ứng viên tiềm năng trên tuyendungso1.</li>
                                <li class="pb-4" style="font-size: 22px;"> Chi phí hợp lý hơn so với các dịch vụ quảng cáo banner
                                    tương tự.</li>
                                <li class="pb-4" style="font-size: 22px;"> Hỗ trợ tư vấn, thiết kế banner chuyên nghiệp.</li>
                                <li class="pb-4" style="font-size: 22px;"> Xây dựng trang tuyển dụng uy tín, giúp doanh nghiệp tìm
                                    kiếm ứng viên, tuyển dụng hiệu quả.</li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <button class="btn text-white">Tư vấn tuyển dụng miễn phí <img src="/assets/img/arrow_right-icon.jpg" alt=""> </button>
                        </div>
                    </div>
                </div> -->
</div>
<?php
            echo $args['after_widget'];
        }

        //Cập nhật dữ liệu các field của Widget
        function update($new_instance, $old_instance)
        {
            $instance = array();

            if (!empty($new_instance['main_sub_title'])) {
                $instance['main_sub_title'] = ($new_instance['main_sub_title']);
            }

            if (!empty($new_instance['main_title'])) {
                $instance['main_title'] = ($new_instance['main_title']);
            }

            if (!empty($new_instance['recruitmentServices_repeat_sortable_data_1'])) {
                $instance['recruitmentServices_repeat_sortable_data_1'] = $new_instance['recruitmentServices_repeat_sortable_data_1'];
            }

            if (!empty($new_instance['recruitmentServices_repeat_sortable_data_2'])) {
                $instance['recruitmentServices_repeat_sortable_data_2'] = $new_instance['recruitmentServices_repeat_sortable_data_2'];
            }
            return $instance;
        }


        //Khai báo các field của Widget
        function form($instance)
        {
            $defaults = array('main_sub_title' => '', 'main_title' => '', 'recruitmentServices_repeat_sortable_data_1' => '', 'recruitmentServices_repeat_sortable_data_2' => '');
            $instance = wp_parse_args($instance, $defaults); ?>

<!-- text field -->
<?php Ws247_M_WG::helper_text_field('main_sub_title', 'Main Sub Tittle', $this, $instance); ?>

<!-- text field -->
<?php Ws247_M_WG::helper_text_field('main_title', 'Main Title', $this, $instance); ?>

<!-- Repeat field -->
<?php
            $id_field = 'recruitmentServices_repeat_sortable_data_1';
            wpshare247_repeat_sortable::register_field($id_field, esc_attr($this->get_field_name($id_field)), 'Block Infor', $instance, $this->init_repeat_sortable_fields());
            ?>

<?php
        }
    }
endif;