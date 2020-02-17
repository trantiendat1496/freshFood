

<main>
	<section>
		<div class ="container" style="margin-top: 2em;">
            <div class="row row-reverse-xs" style="background-color: white;">
                <div class="col-12 col-lg-3 order-2 order-lg-1 " style="margin-bottom: 2em;">
                    <div id="menu"><b>DANH MỤC SẢN PHẨM</b></div>
                    <div id="dropdown"style="padding-top: 10px; padding-right: 20px;">
                    	<?php
                    	// $category = $data['categories'];
                    	// foreach ($category as $value) {
                    	//Tách dữ liệu từ biến $data bên controller và gán cho biến mới đại diện category
                    	$cat = $data['parentcatid'];
                    	//Test
                    	// echo "<pre>";
                    	// print_r($cat);
                    	// echo "</pre>";
                    	foreach ($cat as $k => $v) {
                    	
                    	?>
                        <ul>
                            <li>
                            	<a href="<?php echo PATH."?controller=home&action=productbycatid&catid=".$v['categoryID'];?>">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 <?php echo $v['categoryName'];?>
                            	</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            
                            
                        </ul>

                        <?php
                    	}
                        ?>
                    </div>
                </div>
                <div class="col-12 col-lg-9 order-1 order-lg-2" style="">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="<?php echo PATH;?>assets/images/logo/logo1.png" class="d-block w-100" class="mySlides" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="<?php echo PATH;?>assets/images/logo/logo2.png" class="d-block w-100" class="mySlides" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="<?php echo PATH;?>assets/images/logo/logo3.png" class="d-block w-100" class="mySlides" alt="...">
                </div>
                <div class="col">
                    <img src="<?php echo PATH;?>assets/images/logo/logo4.png" class="d-block w-100" class="mySlides" alt="...">
                </div>
                <div class="col">
                    <img src="<?php echo PATH;?>assets/images/logo/logo5.png" class="d-block w-100" class="mySlides" alt="...">
                </div>
            </div>
    	</div><!--end container-->



    	<!-------------------------- Product-------------------------->
    	<?php 
    	$catid = $data['catid'];
    	$parentcatid = $data['parentcatid'];
    	foreach ($catid as $key => $value) {
    		$id = $value['categoryID'];
    		$arrParentID = array();
    		foreach ($parentcatid as $k => $v) {
    			if($v['parentCategoryID'] == $id)
    				$arrParentID[] = $v;
    		}
    		// echo "<pre>";
    		// print_r($arrParentID);
    		// echo "</pre>";
    	?>
		<div class="container">
			<div class="brick">
	            <h6 class="title-myclass"><?php echo $value['categoryName'];?></h6>
    		</div>


			<div class="product">
				<ul class="nav nav-tabs" id="myTab" >
					<?php
					
					foreach($arrParentID as $k1 => $v1){

						if ($k1 == 0) {
					?>
							<li class="nav-item">
							    <a class="nav-link active" data-toggle="tab"  href="#<?php echo $v1['categoryID'];?>"><?php echo $v1['categoryName'];?></a>
							</li>
					
					<?php
						} else{
					?>
						<li class="nav-item">
						    <a class="nav-link" data-toggle="tab"  href="#<?php echo $v1['categoryID'];?>"><?php echo $v1['categoryName'];?></a>
						</li>
					<?php
						}
					}
					?>
				</ul>
				<div class="tab-content" id="myTabContent">
					<?php
					foreach($arrParentID as $k1 => $v1){
					// 	echo "<pre>";
					// print_r($arrParentID);
					// print_r($data['product']);
					
						$products= $data['product'];
						$arrProNew = array();
						foreach ($products as $k2 => $v2) {
							if ($v2['categoryID'] == $v1['categoryID']) {
								$arrProNew[] = $v2;
							}
						}
					?>
				  	<div class="tab-pane fade show active" id="<?php echo $v1['categoryID'];?>">
				  		<div class="owl-carousel owl-theme owl-carousel-myclass1" >
				  			<?php
				  			
				  			foreach($arrProNew as $k3 => $v3){
				  				// echo "<pre>";
				  				// print_r($v3);
				  				// echo "</pre>";
				  			?>
				  			
							<div class="item" style="margin: 10px;">
						    	<div class="cart">
									<a href="<?php echo PATH;?>?controller=product&action=detail&id=<?php echo $v3['productID'];?>">
										<img class="cart-img" src="<?php echo PATH;?>assets/images/products/<?php echo $v3['thumbnail']?>" width="100%">
									</a>
									<div class="cart-title"><?php echo $v3['productName'];?></div>
									<div class="price">
								    	<span class="price-old"><?php echo $v3['unitPrice'];?>đ</span>
								    	<span class="price-new">
								    		<?php echo $v3['unitPrice']-($v3['unitPrice']*$v3['discount'])/100;?>đ
								    	</span>
									</div>
									<div class="link-cart">
										<a href="#">
											<i class="fa fa-shopping-cart"></i> Thêm vào giỏ
										</a>
									</div>
								</div>
							</div>
							<?php
							}
							?>
						
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		<!--------------------------end Product-------------------------->


		<div class="container">
			<div class="row" style="margin-top: 2em;">
                <div class="col">
                    <img src="<?php echo PATH;?>assets/images/logo/logo6.png" class="d-block w-100"  style="border-radius: 15px;">
                </div>
                <div class="col">
                    <img src="<?php echo PATH;?>assets/images/logo/logo7.png" class="d-block w-100" style="border-radius: 15px;">
                </div>
            </div>
		</div>


		<!-------------------------- News-------------------------->
    	<div class="container">
    		<div class="brick">
	            <h6 class="title-myclass">TIN TỨC</h6>
    		</div>
    		
			<div class="owl-carousel owl-theme owl-carousel-myclass2" style="margin-top: 2em;">
			    <div class="item">
			    	<div style="border: 1px solid #e9ecef;border-radius: 20px;color: black;margin-right: 20px;">
	                    <a href="<?php echo PATH;?>?controller=home&action=news">
	                    	<img src="<?php echo PATH;?>assets/images/news/new1.jpg" class="card-img-top" alt="...">
	                    </a>
	                    <div class="card-body">
	                        <h5 class="card-title">Card title</h5>
	                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                        <a href="<?php echo PATH;?>?controller=home&action=news" class="btn" style="background-color: #80BB35; color: white;">Xem thêm</a>
	                    </div>
	                </div>
			    </div>
			    <div class="item">
			    	<div style="border: 1px solid #e9ecef;border-radius: 20px;color: black;margin-right: 20px;">
	                    <a href="<?php echo PATH;?>?controller=home&action=news">
	                    	<img src="<?php echo PATH;?>assets/images/news/new2.jpg" class="card-img-top" alt="...">
	                    </a>
	                    <div class="card-body">
	                        <h5 class="card-title">Card title</h5>
	                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                        <a href="<?php echo PATH;?>?controller=home&action=news" class="btn" style="background-color: #80BB35; color: white;">Xem thêm</a>
	                    </div>
	                </div>
			    </div>
			    <div class="item">
			    	<div style="border: 1px solid #e9ecef;border-radius: 20px;color: black;margin-right: 20px;">
	                    <a href="<?php echo PATH;?>?controller=home&action=news">
	                    	<img src="<?php echo PATH;?>assets/images/news/new3.jpg" class="card-img-top" alt="...">
	                    </a>
	                    <div class="card-body">
	                        <h5 class="card-title">Card title</h5>
	                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                        <a href="<?php echo PATH;?>?controller=home&action=news" class="btn" style="background-color: #80BB35; color: white;">Xem thêm</a>
	                    </div>
	                </div>
			    </div>
			    <div class="item">
			    	<div  style="border: 1px solid #e9ecef;border-radius: 20px;color: black;margin-right: 20px;">
	                    <a href="<?php echo PATH;?>?controller=home&action=news">
	                    	<img src="<?php echo PATH;?>assets/images/news/new1.jpg" class="card-img-top" alt="...">
	                    </a>
	                    <div class="card-body">
	                        <h5 class="card-title">Card title</h5>
	                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                        <a href="<?php echo PATH;?>?controller=home&action=news" class="btn" style="background-color: #80BB35; color: white;">Xem thêm</a>
	                    </div>
	                </div>
			    </div>
			    <div class="item">
			    	<div  style="border: 1px solid #e9ecef;border-radius: 20px;color: black;margin-right: 20px;">
	                    <a href="<?php echo PATH;?>?controller=home&action=news">
	                    	<img src="<?php echo PATH;?>assets/images/news/new2.jpg" class="card-img-top" alt="...">
	                    </a>
	                    <div class="card-body">
	                        <h5 class="card-title">Card title</h5>
	                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                        <a href="<?php echo PATH;?>?controller=home&action=news" class="btn" style="background-color: #80BB35; color: white;">Xem thêm</a>
	                    </div>
	                </div>
			    </div>
			    
			    
			    
			</div>
		</div><!--end container-->
		<!-------------------------- end News-------------------------->
	</section><!--end section-->


	<section id="feedback">
		<div class="container">
    		<div class="brick">
	            <h6 class="title-myclass">PHẢN HỒI CỦA KHÁCH HÀNG</h6>
    		</div>
			<div class="owl-carousel owl-theme owl-carousel-myclass2" style="margin-top: 2em;">
			    <div class="item">
                    <div class="card" style="border-radius: 20px; margin-right: 20px;">
					  	<img src="<?php echo PATH;?>assets/images/customers/employee1.png" class="card-img-top" alt="..." style=" width: auto;height: 250px; margin: 1em 2em 0em 2em;" >
						<div class="card-body">
					    	<p class="card-text" style="text-align: center;">Nhân viên văn phòng - Mr.Thành</p>     
					    	Là một người khá kỹ tính, tôi luôn lựa chọn những thực phẩm sạch nhất. Và đây là nơi tôi đặt trọn niềm tin.
					 	</div>
					</div>
			    </div>
			    <div class="item">
                    <div class="card" style="border-radius: 20px;margin-right: 20px;">
					  	<img src="<?php echo PATH;?>assets/images/customers/employee2.png" class="card-img-top" alt="..." style=" width: auto;height: 250px; margin: 1em 2em 0em 2em;">
						<div class="card-body">
					    	<p class="card-text" style="text-align: center;">Nhân viên văn phòng - Mr.Thành</p>
					    	Là một người khá kỹ tính, tôi luôn lựa chọn những thực phẩm sạch nhất. Và đây là nơi tôi đặt trọn niềm tin.
					 	</div>
					</div>
			    </div>
			    <div class="item">
                    <div class="card" style="border-radius: 20px;margin-right: 20px;">
					  	<img src="<?php echo PATH;?>assets/images/customers/employee3.png" class="card-img-top" alt="..." style=" width: auto;height: 250px; margin: 1em 2em 0em 2em;">
						<div class="card-body">
					    	<p class="card-text" style="text-align: center;">Nhân viên văn phòng - Mr.Thành</p>
					    	Là một người khá kỹ tính, tôi luôn lựa chọn những thực phẩm sạch nhất. Và đây là nơi tôi đặt trọn niềm tin.
					 	</div>
					</div>
			    </div>
			   
			    
			    
			</div>
		</div><!--end container-->
	</section><!--end section feedback-->
</main><!--end main-->

