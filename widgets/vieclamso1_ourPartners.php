<?php
if (!class_exists('vieclamso1_ourPartners')) :
    class vieclamso1_ourPartners extends WP_Widget
    {
        function __construct()
        {
            parent::__construct(
                'vieclamso1_ourPartners',
                esc_html_x('* [11] Our Partners page', 'widget name', 'wpshare247'),
                array(
                    'classname' => 'vieclamso1_ourPartners',
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
<div class="page11 d-flex flex-column" style="background-color: var(--background-color)">
    <div class="page11-content__title mb-2 d-flex flex-column justify-content-center align-items-center">
        <h4 class="page11-sub__title pt-5 pt-2 text-center" style="color: var(--primary-color);">OUR PARTNERS</h4>
        <h1 class="page11-title pt-3 display-4 text-center" style=" font-weight: 500;">Khách hàng tiêu biểu và đối tác
            truyền thông của Vieclamso1</h1>
    </div>
    <div class="page11-card col-12 col-md-12 mt-3 d-flex flex-md-row flex-column justify-content-center align-items-stretch"
        style="background-color: var(--background-color)">
        <!-- col1 -->
        <div class=" w-100 mx-md-4 my-2 p-4 p-md-5 " style="background-color: white; border-radius: 20px; ">
            <div class="title pt-5">
                <h1 class="page2-title py-1 pl-3" style="border-left:7px solid var(--primary-color);">Đối với Doanh
                    nghiệp </h1>
            </div>
            <div class="brand">
                <div class="brand-1 d-flex justify-content-between align-items-center">
                    <img class="col-4 img-fluid" src="/assets/img/FPT-edu.png" alt="" width="100%" height="100%">
                    <img class="col-4 img-fluid" src="/assets/img/teky.png" alt="" width="100%" height="100%">
                    <img class="col-4 img-fluid" src="/assets/img/shinhan-bank.png" alt="" width="100%" height="100%">
                </div>
                <div class="brand-2 d-flex justify-content-between align-items-center">
                    <img class="col-4 img-fluid" src="/assets/img/edupia.png" alt="" width="100%" height="100%">
                    <img class="col-4 img-fluid" src="/assets/img/viettel.png" alt="" width="100%" height="100%">
                    <img class="col-4 img-fluid" src="/assets/img/techombank.png" alt="" width="100%" height="100%">
                </div>
            </div>
        </div>
        <!-- col2 -->
        <div class=" w-100 mx-md-4 my-2 p-4 p-md-5 " style="background-color: white; border-radius: 20px; ">
            <div class="title pt-5">
                <h1 class="page2-title py-1 pl-3" style="border-left:7px solid var(--primary-color);">Đối với Nhà tuyển
                    dụng</h1>
            </div>
            <div class="brand">
                <div class="brand-1 d-flex justify-content-between align-items-center">
                    <img class="col-4 img-fluid" src="/assets/img/genk.jpg" alt="" width="100%" height="100%">
                    <img class="col-4 img-fluid" src="/assets/img/vtc10.jpg" alt="" width="100%" height="100%">
                    <img class="col-4 img-fluid" src="/assets/img/vtv1.jpg" alt="" width="100%" height="100%">
                </div>
                <div class="brand-2 d-flex justify-content-between align-items-center">
                    <img class="col-4 img-fluid" src="/assets/img/cafebiz.jpg" alt="" width="100%" height="100%">
                    <img class="col-4 img-fluid" src="/assets/img/vtv2.jpg" alt="" width="100%" height="100%">
                    <img class="col-4 img-fluid" src="/assets/img/vtv6.jpg" alt="" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page12 py-5 d-flex flex-column" style="background-color: var(--background-color)">
    <div class="mx-4">
        <div class="page12__title pt-5 pl-3">
            <h1 class="page2-title py-1 pl-4" style="border-left:7px solid var(--primary-color);">Việc làm số 1 Việt Nam
                mong muốn được hợp tác cùng Doanh nghiệp </h1>
            <p class="py-4" style="font-size: 28px; font-weight: 400;">
                Đội ngũ hỗ trợ của Việc làm số 1 luôn sẵn sàng để tư vấn giải pháp tuyển dụng và đồng hành cùng các Quý
                nhà tuyển dụng</p>
        </div>
        <div
            class="page12__content col-12 col-md-12 d-flex flex-md-row flex-column justify-content-center align-items-stretch">
            <!-- col1 -->
            <div class="page12__content__north w-100 d-flex flex-column align-items-start">
                <h3 class="py-2">Hotline Tư vấn Tuyển dụng miền Bắc</h3>
                <div class="infor1 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style=" max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="auto">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0944 876 109</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Nguyễn Thị Thu Hương</p>
                    </div>
                </div>
                <div class="infor2 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style=" max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="auto">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0975 923 878</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Hoàng Thị Tuyết</p>
                    </div>
                </div>
                <div class="infor3 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style=" max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="auto">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0343 439 988</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Lê Thị Thanh Tâm</p>
                    </div>
                </div>
                <div class="infor4 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style=" max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="auto">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0332 678 613</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Đinh Thị Huyền</p>
                    </div>
                </div>
                <div class="infor5 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style=" max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="auto">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0339 317 722</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Nguyễn Thị Trang</p>
                    </div>
                </div>
            </div>
            <!-- col2 -->
            <div class="page12__content__north  w-100 d-flex flex-column align-items-start">
                <h3 class="py-2">Hotline Tư vấn Tuyển dụng miền Nam</h3>
                <div class="col2_infor1 d-flex w-75 p-md-5 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style="max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="auto">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0902 867 167</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Đặng Thị Hoàng Dung</p>
                    </div>
                </div>
                <div class="infor2 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style="max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="atuo">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0396 932 311</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Lê Thị Mỹ Trang</p>
                    </div>
                </div>
                <div class="infor3 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style="max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="atuo">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0976 593 426</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Trần Ngọc Quế Anh</p>
                    </div>
                </div>
                <div class="infor4 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style="max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="atuo">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0978 526 627</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Nguyễn Thùy Dương</p>
                    </div>
                </div>
                <div class="infor5 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-green.png" alt=""
                            style="max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="atuo">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: var(--primary-color);">0906 339 965</h4>
                        <p class="m-0" style="font-size: 25px; font-weight: 400;">Nguyễn Thị Hoài Ân</p>
                    </div>
                </div>
            </div>
            <!-- col3 -->
            <div class="page12__content__north w-100 d-flex flex-column align-items-start">
                <h3 class="py-2">Hỗ trợ khách hàng và khiếu nại dịch vụ</h3>
                <div class="col3_infor1 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white; width: 90%;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-orange.png" alt=""
                            style="max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="atuo">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: #FCA530;">(024) 7107 9799</h4>
                    </div>
                </div>
                <div class="infor2 d-flex w-75 p-md-5 p-2 my-4 justify-content-start align-items-center"
                    style="border-radius: 20px; background-color: white; width: 90%;">
                    <div class="page12-phone">
                        <img class="img-fluid" src="/assets/img/callphone-orange.png" alt=""
                            style="max-width: 100%; background-color: #EDFFE8; border-radius: 50%; " height="auto">
                    </div>
                    <div class="pl-4">
                        <h4 style="color: #FCA530;">0862 69 19 29</h4>
                    </div>
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