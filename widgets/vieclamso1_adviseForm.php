<?php
if (!class_exists('vieclamso1_adviseForm')) :
    class vieclamso1_adviseForm extends WP_Widget
    {
        function __construct()
        {
            parent::__construct(
                'vieclamso1_adviseForm',
                esc_html_x('* [7] Register Advise Form page', 'widget name', 'wpshare247'),
                array(
                    'classname' => 'vieclamso1_adviseForm',
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
            $description = $instance['description'];
            $my_img_url = $instance['my_img_url'];
            $form_title = $instance['form_title'];
            $contact_form_id = $instance['contact_form_id'];

            echo $args['before_widget'];
?>
<div class="page7 pb-5" style="background-color: var(--background-color); ">
    <div class="page7-content mx-4 border d-flex flex-column align-items-center position-relative"
        style="background-image: linear-gradient( to right, #135D00, #20A000); height: 900px;">
        <div class="page7-content__title d-flex flex-column justify-content-center align-items-center text-white py-5">
            <h1 class="page7-title py-3 display-4 text-center " style=" font-weight: 500;"> <?php echo $title; ?>
            </h1>
            <p class="page7-text text-center" style="font-size: 28px;"> <?php echo $description; ?> </p>
        </div>
        <div class="page7-wapper col-12 col-md-10 d-md-flex align-items-stretch justify-content-center position-absolute"
            style="top: 30%; ">
            <img class="col-md-5 p-0 img-fluid d-none d-lg-flex" style=" border-radius: 20px 0 0 20px;"
                src="<?php echo $my_img_url; ?>" alt="">
            <div class=" col-12 col-md-5 p-sm-5 page7-wapper__content d-flex flex-column justify-content-start>"
                style="background-color: white; border-radius: 0 20px 20px 0;">
                <h1 class=" pt-2 pb-2 display-5 " style=" color: var(--primary-color);"><?php echo $form_title; ?></h1>
                <?php
                            if ($contact_form_id) {
                                echo do_shortcode('[contact-form-7 id="' . $contact_form_id . '" title="Form liên hệ"]');
                            }
                            ?>
            </div>

            <!-- <form class=" col-12 col-md-5 p-sm-5 page7-wapper__content d-flex flex-column justify-content-start"
                style="background-color: white; border-radius: 0 20px 20px 0;" action="">
                <h1 class="pt-5 pb-2 display-5 " style="color: var(--primary-color);">Đăng ký nhận tư vấn</h1>

                <label for="name" style="font-size: 20px; font-weight: 500;">Họ và tên</label>
                <div class="form-group d-flex flex-column">
                    <img class="img-fluid" style="max-width: 100%;" height="auto" src="/assets/img/user.png" alt="">
                    <input type="text" class="py-2" id="name" placeholder="Nhập họ và tên" width="100%">
                </div>

                <label for="email" style="font-size: 20px; font-weight: 500;">Email</label>
                <div class="form-group d-flex flex-column">
                    <img class="img-fluid" style="max-width: 100%;" height="auto" src="/assets/img/email.png" alt="">
                    <input type="email" class="py-2" id="email" placeholder="Nhập email" width="100%">
                </div>

                <label for="phone" style="font-size: 20px; font-weight: 500;">Số điện thoại</label>
                <div class="form-group d-flex flex-column">
                    <img class="img-fluid" style="max-width: 100%;" height="auto" src="/assets/img/phone.png" alt="">
                    <input class="py-2" type="text" id="phone" placeholder="Nhập số điện thoại" width="100%">
                </div>

                <label for="phone" style="font-size: 20px; font-weight: 500;">Tỉnh/Thành phố</label>
                <div class="form-group d-flex flex-column pl-5 border py-2 pr-2">
                    <img class="img-fluid" style="max-width: 100%;" height="auto" src="/assets/img/city.png" alt="">
                    <select id="city" width="100%" style="border: 1px solid #ced4da;">
                        <option value="">Chọn tỉnh/Thành phố</option>
                        <option value="HCM">Hồ Chí Minh</option>
                        <option value="HN">Hà Nội</option>
                    </select>
                </div>

                <label for="phone" style="font-size: 20px; font-weight: 500;">Nhu cầu tư vấn</label>
                <div class="form-group d-flex flex-column pl-5 border py-2 pr-2">
                    <img class="img-fluid" style="max-width: 100%;" height="auto" src="/assets/img/city.png" alt="">
                    <select id="support" width="100%" style="border: 1px solid #ced4da;">
                        <option value="">Chọn nhu cầu tư vấn</option>
                        <option value="">CV</option>
                    </select>
                </div>

                <div class=" py-3 d-flex justify-content-center align-items-center">
                    <button type="submit"
                        class="col-10 btn px-4 py-2 text-white d-flex flex-row align-items-center justify-content-center"
                        style="font-size: 20px; background-color: var(--primary-color);"> <img class="pr-3"
                            src="/assets/img/arrow-form.png" alt=""> Gửi yêu cầu tư vấn </button>
                </div>
            </form> -->
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

            if (!empty($new_instance['description'])) {
                $instance['description'] = ($new_instance['description']);
            }

            if (!empty($new_instance['form_title'])) {
                $instance['form_title'] = ($new_instance['form_title']);
            }

            if (!empty($new_instance['my_img_url'])) {
                $instance['my_img_url'] = ($new_instance['my_img_url']);
            }

            if (!empty($new_instance['contact_form_id'])) {
                $instance['contact_form_id'] = ($new_instance['contact_form_id']);
            }



            return $instance;
        }


        //Khai báo các field của Widget
        function form($instance)
        {
            $defaults = array('title' => '', 'description' => '', 'form_title' => '', 'my_img_url' => '', 'contact_form_id' => '');
            $instance = wp_parse_args($instance, $defaults); ?>
<!-- text field -->
<?php Ws247_M_WG::helper_text_field('title', 'Title', $this, $instance); ?>

<!-- textarea field -->
<?php Ws247_M_WG::helper_textarea_field('description', 'Description', $this, $instance); ?>

<!-- Image field -->
<?php Ws247_M_WG::helper_image_field('my_img_url', 'Image', $this, $instance); ?>

<!-- text field -->
<?php Ws247_M_WG::helper_text_field('form_title', 'Form Title', $this, $instance); ?>

<!-- Contact Form 7 field -->
<?php Ws247_M_WG::helper_contact_form7_field('contact_form_id', 'Form liên hệ', $this, $instance); ?>


<?php
        }
    }
endif;