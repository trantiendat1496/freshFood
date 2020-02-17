<!DOCTYPE html>
<html>
<head>
	<title>Hệ thống cửa hàng Fresh Food</title>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/5a505b47b8.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="<?php echo PATH;?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo PATH;?>assets/css/owl.theme.default.css">
	<link rel="stylesheet" href="<?php echo PATH;?>assets/css/owl.theme.default.min.css">
	<script src="<?php echo PATH;?>assets/js/owl.carousel.min.js"></script>

	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

	<link rel="stylesheet" type="text/css" href="<?php echo PATH;?>assets/css/layout.css">
	
	<script type="text/javascript" src="<?php echo PATH;?>assets/js/validation.js"></script>
	

</head>
<body>

	<header>
		<div class="container-fluit cf-myclass">
			<div class="container">
				<div class="row row-myclass">
					<div class="col col-lg-3">
						<i class="fas fa-mobile-alt"></i><b> Điện thoại: 0332453467</b> 
					</div>
					<div class="col col-lg-6">
						<i class="fas fa-envelope"></i><b> Email: contact@yourdomain.com</b> 
					</div>
					<div class="col col-lg-3 login-myclass">
						<a href="<?php echo PATH;?>?controller=customer&action=register"><b> Đăng kí</b></a>
						<b> / </b>
						<a href="<?php echo PATH;?>?controller=customer&action=login"><b> Đăng nhập </b></a>
						<i class="fas fa-user"> </i>
						
					</div>
				</div>
			</div>
		</div>

		<div class="container" style="margin-top: 2.5em;">
            <div class="row" style="display: flex;align-items: center;font-size: 14px;">
            	<div class="col-3 col-md-3 col-lg-12 order-md-1 order-lg-6">
            		<div class="container-fluit">
			        	
				        	<div id="mySidenav" class="sidenav">
							  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
							  <label>
							  	<a href="register.php">Đăng kí </a>
							  </label>
							  <label>
							  	<a href="login.php">Đăng nhập</a>
							  </label>
							  <form action="search.php" method="post">
							  	<input type="text" name="" placeholder="Tìm kiếm" style="background-color: #ddd;">
							  	<input type="submit" name="" value="Tìm" class="btn btn-success">
							  </form>
							  <a href="<?php echo PATH;?>?controller=home&action=index">Trang chủ</a>
							  <div class="dropdown-divider"></div>
							  <a href="<?php echo PATH;?>?controller=home&action=introdue">Giới thiệu</a>
							  <div class="dropdown-divider"></div>
							  <a href="<?php echo PATH;?>?controller=home&action=product">Sản phẩm</a>
							  <div class="dropdown-divider"></div>
							  <a href="<?php echo PATH;?>?controller=home&action=news">Tin tức</a>
							  <div class="dropdown-divider"></div>
							  <a href="<?php echo PATH;?>?controller=home&action=contact">Liên hệ</a>
							</div>

							<!-- Use any element to open the sidenav -->
							<span onclick="openNav()" class="openNav-myclass"><i class="fas fa-bars" style="font-size: 30px; color: black;line-height: 2; "></i></span>

							<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
							<div id="main" class="main-myclass">
							  	<!-- <ul>
							  		<li><h6><a href="">Trang Chủ</a></h6></li>
							  		<li><h6><a href="introdue.php">Giới Thiệu</a></h6></li>
							  		<li><h6><a href="">Sản Phẩm</a></h6></li>
							  		<li><h6><a href="">Tin Tức</a></h6></li>
							  		<li><h6><a href="">Liên Hệ</a></h6></li>
							  		<input type="button" name="" value="Tìm" style="float: right; border-radius: 5px;margin-left: 5px;">
							  		<input type="text" name="" placeholder="Tìm kiếm" style="float: right;border-radius: 5px;width: 20%;padding-left: 1em;">
							  	</ul> -->
							</div>
				        
			        </div>
            	</div>

                <div class="col-6 col-md-6 col-lg-3 order-md-2 order-lg-1">
                    <a href="<?php echo PATH;?>?controller=home&action=index"><img src="<?php echo PATH;?>assets/images/freshfood.png" alt="..." class="img-thumbnail img-myclass" style="border: none;"></a>
                </div>

                <div class="col-3 col-md-3 col-lg-2 order-md-3 order-lg-5 cart-myclass" style="display: flex;align-items: center;justify-content: flex-end;">
                	<span style="background-color: #FE9705; color: white; ; border-radius: 5px; line-height: 
                    2; float: right; padding: 5px;">
                    	<a href="<?php echo PATH;?>?controller=home&action=cart">
                    		<i class="fas fa-shopping-cart"></i>
                			<b>Giỏ hàng(0)</b>
                		</a>
            		</span> 
                </div>

                <div class="col col-md-4 col-lg-3  order-lg-2 col-myclass" >
                	<div style="display: flex;flex-direction: row;">
                		<label>
	                		<img src="<?php echo PATH;?>assets/images/1.png" style="margin-top: 8px;">
	                	</label>
	                    <div style="margin-left: 10px;">
	                    	<div>
	                    		<b>Miễn phí vận chuyển</b>
	                    	</div>
	                    	<div>
	                    		Bán kính 100km
	                    	</div>
	                    </div>
                	</div>
                </div>

                <div class="col col-md-4 col-lg-2  order-lg-2 col-myclass" >
                	<div style="display: flex;flex-direction: row;">
                		<label>
	                		<img src="<?php echo PATH;?>assets/images/2.png" style="margin-top: 5px;">
	                	</label>
	                    <div style="margin-left: 10px;">
	                    	<div>
	                    		<b>Hỗ trợ 24/7</b>
	                    	</div>
	                    	<div>
	                    		Hotline:0332453467
	                    	</div>
	                    </div>
                	</div>
                </div>

                <div class="col col-md-4 col-lg-2  order-lg-2 col-myclass" >
                	<div style="display: flex;flex-direction: row;">
                		<label>
	                		<img src="<?php echo PATH;?>assets/images/3.png" style="margin-top: 8px;">
	                	</label>
	                    <div style="margin-left: 10px;">
	                    	<div>
	                    		<b>Giờ mở cửa</b>
	                    	</div>
	                    	<div>
	                    		8h-21h hằng ngày
	                    	</div>
	                    </div>
                	</div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container-fluit" style="background: #80BB35;">
        	<div class="container menu-myclass">
        		<ul>
			  		<li><h6><a href="<?php echo PATH;?>?controller=home&action=index">Trang Chủ</a></h6></li>
			  		<li><h6><a href="<?php echo PATH;?>?controller=home&action=introdue">Giới Thiệu</a></h6></li>
			  		<li><h6><a href="<?php echo PATH;?>?controller=home&action=product">Sản Phẩm</a></h6></li>
			  		<li><h6><a href="<?php echo PATH;?>?controller=home&action=news">Tin Tức</a></h6></li>
			  		<li><h6><a href="<?php echo PATH;?>?controller=home&action=contact">Liên Hệ</a></h6></li>
			  		<form action="<?php echo PATH;?>?controller=home&action=search" method="post" >
			  			<input type="submit" name="" value="Tìm" style="float: right; border-radius: 5px;margin-left: 5px; border:none;margin-top: 13px;">
			  			<input type="text" name="search" placeholder="Tìm kiếm" style="float: right;border-radius: 5px;width: 20%;padding-left: 1em;">
			  		</form>
			  			
			  		
			  		
			  	</ul>
        	</div>
        </div>


	</header><!--end header-->


	




	<div id="content-main">
		<?= @$content ?>
	</div>






	<footer>
		<div class="container">
			<div class="row" style="margin-top: 2em; background-color: white;">
	            <div class="col-2">
	                <img src="<?php echo PATH;?>assets/images/footer1.png" class="d-block w-100" class="mySlides" alt="...">
	            </div>
	            <div class="col-2">
	                <img src="<?php echo PATH;?>assets/images/footer2.png" class="d-block w-100" class="mySlides" alt="...">
	            </div>
	            <div class="col-2">
	                <img src="<?php echo PATH;?>assets/images/footer1.png" class="d-block w-100" class="mySlides" alt="...">
	            </div>
	            <div class="col-2">
	                <img src="<?php echo PATH;?>assets/images/footer2.png" class="d-block w-100" class="mySlides" alt="...">
	            </div>
	            <div class="col-2">
	                <img src="<?php echo PATH;?>assets/images/footer1.png" class="d-block w-100" class="mySlides" alt="...">
	            </div>
	            <div class="col-2">
	                <img src="<?php echo PATH;?>assets/images/footer2.png" class="d-block w-100" class="mySlides" alt="...">
	            </div>
	        </div>
		</div>
		

		<div class="container-fluit" style="background-color:#80BB35; margin-top: 2em; ">
			<div class="container">

				<div class="row" style="padding: 2em 0;">
					<div class="col-12 col-lg-4 col-myclass-footer">
						<li><h5>LIÊN HỆ</h5></li>
						<li><i class="fas fa-map-marker-alt icon-myclass"></i> 107 Nguyễn Phong Sắc, Q.Cầu Giấy, Hà Nội</li>
						<li><i class="fas fa-phone-alt icon-myclass" ></i> 0332453467</li>
						<li><i class="fas fa-envelope icon-myclass" ></i> contact@yourdomain.com</li>
					</div>
					<div class="col-12 col-lg-4 col-myclass-footer">
						<li><h5>THÔNG TIN</h5></li>
						<li><a href="introdue.php"><i class="fas fa-angle-double-right icon-myclass"></i> Giới thiệu</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right icon-myclass"></i> Thông tin vận chuyển</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right icon-myclass"></i> Chính sách bảo mật</a></li>
					</div>
					<div class="col-12 col-lg-4 col-myclass-footer">
						<li><h5>KẾT NỐI</h5></li>
						<li>
							<i class="fab fa-facebook-square icon2-myclass"></i>
							<i class="fab fa-instagram icon2-myclass"></i>
							<i class="fab fa-twitter icon2-myclass"></i>
							<i class="fab fa-youtube icon2-myclass"></i>
						</li>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluit" style="background-color:#517622;">
			<div class="container" style=" color: white;padding: 1em 0;text-align: center;">
				© Copyright 2018-2019 Fresh Food.
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="<?php echo PATH;?>assets/js/app.js"></script>
</body>
</html>