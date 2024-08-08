<?php
if (!class_exists('vieclamso1_figures')) :
    class vieclamso1_figures extends WP_Widget
    {
        function __construct()
        {
            parent::__construct(
                'vieclamso1_figures',
                esc_html_x('* [6] Figures page', 'widget name', 'wpshare247'),
                array(
                    'classname' => 'vieclamso1_figures',
                    'description' => esc_html__('Giao diện home page', 'wpshare247'),
                    'customize_selective_refresh' => true
                )
            );
        }

        //Chỉ cần khai báo các field tại đây và không cần làm gì thêm----------------------------------------
        function init_repeat_sortable_fields()
        {
            $arr_fields = array(

                'f_repeat_value' => array('type' => 'text', 'label' => 'Value'),
                'f_repeat_textarea' => array('type' => 'textarea', 'label' => 'Description'),
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

            $title = $instance['title'];
            $sub_title = $instance['sub_title'];
            $data_field = $instance['wle_repeat_sortable_data_1'];
            $arr_data = json_decode($data_field, true);


            echo $args['before_widget'];
?>
<div class="page6 mt-5" style="background-color: var(--background-color);">
    <div class="page6-content col-12 col-md-12 ">
        <div class="page6-content d-flex flex-column justify-content-center align-items-center">
            <h4 class="page6-sub__title pt-5 py-2 text-center" style="color: var(--primary-color);">
                <?php echo $sub_title; ?> </h4>
            <h1 class="page6-title pb-3 display-4 text-center" style=" font-weight: 500;"><?php echo $title; ?></h1>
        </div>
        <div class="page6-card mt-3 py-5 d-flex flex-wrap flex-md-row">
            <?php
                        if ($arr_data) {
                            foreach ($arr_data as $k => $arr_item) {
                                $f_repeat_value = $arr_item['f_repeat_value']['val'];
                                $f_repeat_textarea = $arr_item['f_repeat_textarea']['val'];
                                $margin = ($k + 2) % 3 == 0 ? 'mx-0 ' : '';

                        ?>
            <div class="col-md-4 border m-4 mt-0 <?php echo $margin; ?> d-flex flex-grow-1 flex-column"
                style="width: 525px; border-radius: 20px; background-color: #FFFFFF; ">
                <div class="card-title pt-5 pb-2 text-center display-3" style="color: var(--primary-color);">
                    <h1 style="font-weight: 650; font-size: 60px;"><?php echo $f_repeat_value; ?>+</h1>
                </div>
                <div class="card-content mx-4 text-center" style="font-size: 28px; font-weight: 400;">
                    <p><?php echo $f_repeat_textarea; ?></p>
                </div>
            </div>
            <?php
                            }
                        }
                        ?>
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

            if (!empty($new_instance['title'])) {
                $instance['title'] = ($new_instance['title']);
            }

            if (!empty($new_instance['wle_repeat_sortable_data_1'])) {
                $instance['wle_repeat_sortable_data_1'] = ($new_instance['wle_repeat_sortable_data_1']);
            }


            return $instance;
        }


        //Khai báo các field của Widget
        function form($instance)
        {
            $defaults = array('title' => '', 'sub_title' => '', 'wle_repeat_sortable_data_1' => '');
            $instance = wp_parse_args($instance, $defaults); ?>

<!-- text field -->
<?php Ws247_M_WG::helper_text_field('sub_title', 'Sub Title', $this, $instance); ?>

<!-- text field -->
<?php Ws247_M_WG::helper_text_field('title', 'Title', $this, $instance); ?>

<!-- Repeat field -->
<?php
            $id_field = 'wle_repeat_sortable_data_1';
            wpshare247_repeat_sortable::register_field($id_field, esc_attr($this->get_field_name($id_field)), 'Block Infor', $instance, $this->init_repeat_sortable_fields());
            ?>
<?php
        }
    }
endif;