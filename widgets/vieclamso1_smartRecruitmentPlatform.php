<?php
if (!class_exists('vieclamso1_smartRecruitmentPlatform')) :
    class vieclamso1_smartRecruitmentPlatform extends WP_Widget
    {
        function __construct()
        {
            parent::__construct(
                'vieclamso1_smartRecruitmentPlatform',
                esc_html_x('* [4] Smart Recruitment Platform page', 'widget name', 'wpshare247'),
                array(
                    'classname' => 'vieclamso1_smartRecruitmentPlatform',
                    'description' => esc_html__('Giao diện home page', 'wpshare247'),
                    'customize_selective_refresh' => true
                )
            );
        }

        //Chỉ cần khai báo các field tại đây và không cần làm gì thêm----------------------------------------
        function init_repeat_sortable_fields()
        {
            $arr_fields = array(

                'f_repeat_text1' => array('type' => 'text', 'label' => 'Title'),
                'f_repeat_image' => array('type' => 'image', 'label' => 'Image'),
                'f_repeat_textarea' => array('type' => 'textarea', 'label' => 'Description'),
                'f_repeat_text2' => array('type' => 'text', 'label' => 'Text Link'),
                'f_repeat_text3' => array('type' => 'text', 'label' => 'Link')
                // 'f_repeat_text1' => array('type' => 'text', 'label' => 'Kiểu text 1'),
                // 'f_repeat_image' => array('type' => 'image', 'label' => 'Kiểu hình'),
                // 'f_repeat_text2' => array('type' => 'text', 'label' => 'Kiểu text 2'),
                // 'f_repeat_textarea' => array('type' => 'textarea', 'label' => 'Kiểu textarea'),

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
            $defaults = array('title' => '', 'my_img_url' => '');

            $sub_title = $instance['sub_title'];
            $main_title = $instance['main_title'];
            $main_description = $instance['main_description'];
            $data_field = $instance['wle_repeat_sortable_data_1'];
            $arr_data = json_decode($data_field, true);


            echo $args['before_widget'];
?>
            <div class="page4 my-5" style="background-color: var(--background-color);">
                <div class="page4-content col-12 col-md-12 my-3">
                    <div class="page4-content d-flex flex-column justify-content-center align-items-center">
                        <h4 class="page4-sub__title pt-5 py-2 text-center" style="color: var(--primary-color);">
                            <?php echo $sub_title; ?> </h4>
                        <h1 class="page3-title py-3 display-4 text-center" style=" font-weight: 500;"><?php echo $main_title; ?>
                        </h1>
                        <p class="px-5 text-center" style="font-size: 28px; font-weight: 400;">
                            <?php echo $main_description; ?></p>
                    </div>
                    <div class="page4-card my-5 d-flex flex-md-row flex-wrap ">
                        <?php
                        if ($arr_data) {
                            foreach ($arr_data as $k => $arr_item) {
                                $f_repeat_text1 = $arr_item['f_repeat_text1']['val'];
                                $f_repeat_image_url = $arr_item['f_repeat_image']['val'];
                                $f_repeat_textarea = $arr_item['f_repeat_textarea']['val'];
                                $f_repeat_text2 = $arr_item['f_repeat_text2']['val'];
                                $f_repeat_text3 = $arr_item['f_repeat_text3']['val'];
                                // $f_repeat_text2 = $arr_item['f_repeat_text2']['val'];
                                // $f_repeat_select = $arr_item['f_repeat_select']['val'];
                                // $f_repeat_select_cf7_id = $arr_item['f_repeat_select_cf7']['val'];
                        ?>
                                <div class=" border col-md-4 p-2 m-4 d-flex flex-column flex-grow-1 justify-content-start align-items-center text-center" style=" width: 525px; border-radius: 20px; background-color: #FFFFFF; ">
                                    <div class="card-title pt-5 pb-2">
                                        <h2 style="font-weight: 650;"><?php echo $f_repeat_text1; ?></h2>
                                    </div>
                                    <div class="card-img pb-4">
                                        <img class="img-fluid" src="<?php echo $f_repeat_image_url; ?>" alt="" style="max-width: 100%;" height="auto">
                                    </div>
                                    <div class="card-content" style="font-size: 28px; font-weight: 400;">
                                        <p><?php echo $f_repeat_textarea; ?></p>
                                    </div>
                                    <div class="card-btn pb-4">
                                        <a href="<?php echo $f_repeat_text3; ?>" style="color: var(--primary-color); font-weight: 700; font-size: 20px;">
                                            <p><?php echo $f_repeat_text2; ?></p>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <!-- <div class=" border d-flex flex-column justify-content-start align-items-center mx-md-2 my-2 w-100 " style=" border-radius: 20px; background-color: #FFFFFF; ">
                            <div class="card-title pt-5 pb-2 text-center">
                                <h2 style="font-weight: 650;">Chiến dịch Tuyển dụng</h2>
                            </div>
                            <div class="card-img p-5">
                                <img class="img-fluid" src="/assets/img/page4-card2.jpg" alt="" width="100%" height="100%">
                            </div>
                            <div class="card-content mx-2 text-center" style="font-size: 28px; font-weight: 400;">
                                <p>Giúp doanh nghiệp hoàn thiện được cấu trúc
                                    cơ bản của quá trình tuyển dụng và quản lý
                                    được các nguồn mang lại hiệu quả cho hoạt
                                    động tuyển dụng đó. Từ đó, nhà tuyển dụng
                                    có thể tối ưu các phương pháp tìm nguồn
                                    ứng viên và tuyển dụng hiệu quả hơn.</p>
                            </div>
                            <div class="card-btn pb-5 ">
                                <a href="#" style="color: var(--primary-color); font-weight: 700; font-size: 20px;">Tìm hiểu thêm
                                </a>
                            </div>
                        </div>
                        <div class=" border d-flex flex-column justify-content-start align-items-center mx-md-2 my-2 w-100" style=" border-radius: 20px; background-color: #FFFFFF; ">
                            <div class="card-title pt-5 pb-2 text-center ">
                                <h2 style="font-weight: 650;">Tính năng quản lý CV</h2>
                            </div>
                            <div class="card-img p-5" style="overflow: hidden;">
                                <img class="img-fluid" src="/assets/img/page4-card3.jpg" alt="" width="100%" height="100%">
                            </div>
                            <div class="card-content mx-4 text-center " style="font-size: 28px; font-weight: 400;">
                                <p>Giúp nhà tuyển dụng quản lý kho CV ứng
                                    viên của mình một cách đầy đủ, có tính hệ
                                    thống và không bị mất mát dữ liệu.</p>
                            </div>
                            <div class="card-btn pb-5 ">
                                <a href="#" style="color: var(--primary-color); font-weight: 700; font-size: 20px;">Tìm hiểu thêm
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="page4-card d-flex flex-md-row flex-column justify-content-around align-items-stretch">
                        <div class=" border d-flex flex-column justify-content-start align-items-center mx-md-2 my-2 w-100" style=" border-radius: 20px; background-color: #FFFFFF; ">
                            <div class="card-title pt-5 pb-2 text-center">
                                <h2 style="font-weight: 650;">Hệ thống báo cáo tuyển dụng</h2>
                            </div>
                            <div class="card-img p-5">
                                <img class="img-fluid" src="/assets/img/page4-card4.jpg" alt="" width="100%" height="100%">
                            </div>
                            <div class="card-content mx-4 text-center" style="font-size: 28px; font-weight: 400;">
                                <p>Giúp nhà tuyển dụng biết được chính xác
                                    số lượng CV ứng viên qua từng vòng từ
                                    vòng nhận CV đến đi làm. Đồng thời cũng
                                    đo lường chi phí tuyển dụng theo giá trị
                                    thực tế mà doanh nghiệp đã chi trả để tìm
                                    kiếm ứng viên.</p>
                            </div>
                            <div class="card-btn pb-5 ">
                                <a href="#" style="color: var(--primary-color); font-weight: 700; font-size: 20px;">Tìm hiểu thêm
                                </a>
                            </div>
                        </div>
                        <div class=" border d-flex flex-column justify-content-start align-items-center mx-md-2 my-2 w-100 " style=" border-radius: 20px; background-color: #FFFFFF; ">
                            <div class="card-title pt-5 pb-2 text-center">
                                <h2 style="font-weight: 650;">Hệ thống đánh giá ứng viên</h2>
                            </div>
                            <div class="card-img p-5">
                                <img class="img-fluid" src="/assets/img/page4-card5.jpg" alt="" width="100%" height="100%">
                            </div>
                            <div class="card-content mx-2 text-center" style="font-size: 28px; font-weight: 400;">
                                <p>Với nền tảng TestCenter.vn, tuyendungso1
                                    Smart Recruitment Platform giúp nhà tuyển
                                    dụng đánh giá ứng viên toàn diện và khách
                                    quan thông qua bài test online, từ đó tối ưu
                                    tỷ lệ chuyển đổi, tìm kiếm ứng viên tài năng
                                    từ nguồn CV ứng viên thu được từ Chiến
                                    dịch tuyển dụng.</p>
                            </div>
                            <div class="card-btn pb-5 ">
                                <a href="#" style="color: var(--primary-color); font-weight: 700; font-size: 20px;">Tìm hiểu thêm
                                </a>
                            </div>
                        </div>
                        <div class=" border d-flex flex-column justify-content-start align-items-center mx-md-2 my-2 w-100" style=" border-radius: 20px; background-color: #FFFFFF; ">
                            <div class="card-title pt-5 pb-2 text-center ">
                                <h2 style="font-weight: 650;">Gia tăng hiệu quả tuyển dụng thông qua hình thức trả phí</h2>
                            </div>
                            <div class="card-img p-5">
                                <img src="/assets/img/page4-card6.jpg" alt="" width="100%" height="100%">
                            </div>
                            <div class="card-content mx-4 text-center " style="font-size: 28px; font-weight: 400;">
                                <p>Nhà tuyển dụng hoàn toàn chủ động trong
                                    việc lựa chọn và kích hoạt dịch vụ phù hợp
                                    để gia tăng số lượng CV ứng viên ứng
                                    tuyển và tìm kiếm ứng viên tài năng. Với
                                    các phương pháp tìm nguồn ứng viên thông
                                    minh, hiệu quả, nhà tuyển dụng sẽ dễ dàng
                                    tìm kiếm ứng viên cho Chiến dịch tuyển
                                    dụng của mình khi sử dụng tuyendungso1
                                    Smart Recruitment Platform.</p>
                            </div>
                            <div class="card-btn pb-5 ">
                                <a href="#" style="color: var(--primary-color); font-weight: 700; font-size: 20px;">Tìm hiểu thêm
                                </a>
                            </div>
                        </div> -->

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

            if (!empty($new_instance['sub_title'])) {
                $instance['sub_title'] = ($new_instance['sub_title']);
            }

            if (!empty($new_instance['main_title'])) {
                $instance['main_title'] = ($new_instance['main_title']);
            }

            if (!empty($new_instance['main_description'])) {
                $instance['main_description'] = ($new_instance['main_description']);
            }

            if (!empty($new_instance['wle_repeat_sortable_data_1'])) {
                $instance['wle_repeat_sortable_data_1'] = ($new_instance['wle_repeat_sortable_data_1']);
            }
            return $instance;
        }


        //Khai báo các field của Widget
        function form($instance)
        {
            $defaults = array('title' => '', 'my_img_url' => '', 'sub_title' => '', 'main_title' => '', 'main_description' => '', 'wle_repeat_sortable_data_1' => '');
            $instance = wp_parse_args($instance, $defaults); ?>

            <!-- text field -->
            <?php Ws247_M_WG::helper_text_field('sub_title', 'Sub Title', $this, $instance); ?>

            <!-- text field -->
            <?php Ws247_M_WG::helper_text_field('main_title', 'Main Title', $this, $instance); ?>

            <!-- textarea field -->
            <?php Ws247_M_WG::helper_textarea_field('main_description', 'Main Description', $this, $instance); ?>

            <!-- Repeat field -->
            <?php
            $id_field = 'wle_repeat_sortable_data_1';
            wpshare247_repeat_sortable::register_field($id_field, esc_attr($this->get_field_name($id_field)), 'Block Infor', $instance, $this->init_repeat_sortable_fields());
            ?>

<?php
        }
    }
endif;
