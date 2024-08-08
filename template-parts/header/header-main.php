<div class="header__wapper d-flex flex-md-row py-4 justify-content-around align-items-center">
    <div class="col-7 col-lg-3">
        <div class="d-flex flex-column justify-content-start">
            <div class="logo-brand pb-2 ">
                <img src="assets/img/logo-icon.jpg" alt="" class="img-fluid" width="100%" height="100%">
            </div>
            <h6 class="des-brand font-weight-bold" style="font-size: 22px ;">Kênh thông tin - việc làm số 1 tại Việt Nam
            </h6>
        </div>
    </div>
    <div class="menu col-5 col-lg-5 ">

        <nav class="navbar navbar-expand-lg">
            <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbarcollapse">
                <span class="navbar-toggler-icon"><img class="img-fluid" src="/assets/img/menu.png" alt=""></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarcollapse" style="font-size: 22px;">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu', // Vị trí menu. Đảm bảo rằng bạn đã đăng ký vị trí menu này trong theme của mình.
                    'depth' => 2, // Cho phép menu con (dropdown) lên đến 2 cấp.
                    // 'container' => 'nav', // Bọc menu trong một thẻ <div>.
                    // 'container_class' => 'collapse navbar-collapse', // Thêm class cho thẻ <div> bao quanh menu.
                    // 'container_id' => 'navbarNav', // Thêm ID cho thẻ <div> bao quanh menu.
                    'menu_class' => 'navbar-nav mr-auto', // Thêm class cho thẻ <ul> của menu.
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', // Sử dụng phương thức fallback của WP_Bootstrap_Navwalker nếu không có menu nào được thiết lập.
                    'walker' => new WP_Bootstrap_Navwalker() // Sử dụng class WP_Bootstrap_Navwalker để tạo menu.
                )); ?>
            </div>
        </nav>
    </div>
    <div class="col-lg-4 d-none d-lg-flex flex-lg-wrap-reverse py-md-2 justify-content-around align-items-center ">
        <div class="lang d-lg-flex justify-content-around pt-md-3 align-items-center">
            <img src="assets/img/america-icon.jpg" class="img-fluid pr-3" alt="">
            <img src="assets/img/vietnam-icon.jpg" class="img-fluid pr-3" alt="">
            <img src="assets/img/japan-icon.jpg" class="img-fluid pr-3" alt="">
        </div>
        <button class="btn text-white py-md-4 px-md-5"
            style="background-color: var(--primary-color); font-size: 25px;">Đăng tuyển &amp; Tìm CV</button>
    </div>
</div>