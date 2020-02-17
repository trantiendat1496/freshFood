<div class="container">
    <div id="content" class=" col-sm-12 col-xs-12 col-md-12">
        <section class="bread_crumb py-4">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.php"><span><i class="fa fa-home"></i> Trang chủ</span></a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="#"><span>Tài khoản</span></a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="#"> <strong>Đăng ký</strong></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
 

        <div class="row">
            <div class="col-6 my-login-section">
                <img src="<?php echo PATH; ?>/assets/images/store.png" alt="">
                <p>
                    Đã có tài khoản?
                    <a href="<?php echo PATH; ?>?controller=customer&action=login">Đăng nhập</a>
                </p>
            </div>
            <div class="col-6 my-register-section">
                <h4><i class="fa fa-user-plus"></i> Đăng Ký</h4>
                <form class="my-register-form" name="formRegister" action="#" method="post">
                    <div class="field">
                        <label for="fullname">Họ và tên</label>
                        <div class="field error">
                            <input id="fullname" type="text" name="fullname" placeholder="Họ và tên" value="">
                            <div id="name-error" class="error-message"></div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <div class="field error">
                            <input id="email" type="text" name="email" placeholder="Email" value="">
                            <div id="email-error" class="error-message"></div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="phone">Số điện thoại</label>
                        <div class="field error">
                            <input id="phone" type="text" name="fullname" placeholder="Số điện thoại" value="">
                            <div id="phone-error" class="error-message"></div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="password">Mật khẩu</label>
                        <div class="field error">
                            <input id="password" type="password" name="password" placeholder="Mật khẩu" value="">
                            <div id="password-error" class="error-message"></div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="repassword">Nhập lại mật khẩu</label>
                        <div class="field error">
                            <input id="repassword" type="password" name="repassword" placeholder="Nhập lại mật khẩu" value="">
                            <div id="repassword-error" class="error-message">Hãy nhập lại mật khẩu</div>
                        </div>
                    </div>
                    <button type="submit" name="btnRegister" class="btn-register">Đăng ký</button>
                </form>
        </div>
        <div class="clear-fix"></div>
        </div>       
       
</div>
</div>

