<div class="container">
	<div id="content" class="container col-sm-12 col-xs-12 col-md-12">
    <section >
        <div class="container">
            <div class ="news-title-myclass">
				<i class="fas fa-home"></i>
				<a href="index.php">Trang chủ</a>
				 > 
				<label><a href="#">Tài khoản</a></lable> 
				 > 
				<span><a href="login.php">Đăng nhập</a></span> 
			</div>
        </div>
    </section>
    <div class="alert alert-danger">
        <i class="fa fa-exclamation-circle"></i> Cảnh báo: Địa chỉ Email hoặc Mật khẩu không chính xác.
    </div>
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="well">
                <h3>Khách hàng mới</h3>
                <p><strong>Đăng ký</strong></p>
                <p>Bằng việc tạo tài khoản bạn có thể mua sắm nhanh hơn, theo dõi trạng thái đơn hàng, và theo dõi đơn hàng mà bạn đã đặt.</p> <a href="<?php echo PATH;?>?controller=customer&action=register" class="btn btn-primary">Tiếp tục</a>
            </div>
        </div>
        <div class="col-12 col-lg-6" >
            <div class="well">
                <h3>Khách hàng cũ</h3>
                <p><strong>Tôi là khách hàng cũ</strong></p>
                <form action="https://freshfood.exdomain.net/account/login" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label" for="input-email">Địa chỉ Email</label> 
                        <input type="text" name="email" value="" placeholder="Địa chỉ Email" id="input-email" class="form-control"> 
                    </div>
                    <div class="form-group"> 
                        <label class="control-label" for="input-password">Mật khẩu</label> 
                        <input type="password" name="password" value="" placeholder="Mật khẩu" id="input-password" class="form-control"> <a href="https://freshfood.exdomain.net/account/forgotten">Quên mật khẩu?</a> 
                    </div> 
                    <input type="submit" value="Đăng nhập" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
</div>




