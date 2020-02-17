<!--phần content-->
	<div class="container">
		<content>
			<div class ="news-title-myclass">
				<i class="fas fa-home"></i>
				<a href="<?php echo PATH;?>?controller=home&action=index">Trang chủ</a>
				 >
				<?php
				$cat = $data['parentcatid'];

				foreach ($cat as $k => $v) {
				?>
				<span>
					<?php echo PATH."?controller=home&action=productbycatid&catid=".$v['categoryID'];?>
				</span> 
				<?php
			    }
				?>
				
			</div>
			<div style="clear: both;"></div>
			<div class="row slider-category">
				<div class="col-12 col-lg-3 order-2 order-lg-1 ">
                    <div id="menu"><b>DANH MỤC SẢN PHẨM</b></div>
                    <div id="dropdown"style="padding-top: 10px;">
                        <ul>
                            <li>
                            	<a href="<?php echo PATH;?>?controller=product&action=product&id=HSNK">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 Hải sản nhập khẩu
                            	</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                            	<a href="<?php echo PATH;?>?controller=product&action=product&id=HSTS">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 Hải sản tươi sống
                            	</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                            	<a href="<?php echo PATH;?>?controller=product&action=product&id=TTS">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 Thịt tươi sống
                            	</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                            	<a href="<?php echo PATH;?>?controller=product&action=product&id=RAL">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 Rau ăn lá
                            	</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                            	<a href="<?php echo PATH;?>?controller=product&action=product&id=CQT">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 Củ quả tươi
                            	</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                            	<a href="<?php echo PATH;?>?controller=product&action=product&id=RGV">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 Rau gia vị
                            	</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                            	<a href="<?php echo PATH;?>?controller=product&action=product&id=HQT">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 Hoa quả tươi
                            	</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                            	<a href="<?php echo PATH;?>?controller=product&action=product&id=DU">
                            		<i class="fas fa-arrow-circle-right"></i>
                            		 Đồ uống
                            	</a>
                            </li>
                            
                        </ul>
                    </div>

	                    <div id="menu" style="margin-top: 2em;"><b>THƯƠNG HIỆU</b></div>
	                    <div id="dropdown">
	                        <ul>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i> Canada</a></li>
	                            	</label>
	                            </li>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i>Chile</a></li>
	                            	</label>
	                            </li>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i>Nhật Bản</a></li>
	                            	</label>
	                            </li>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i>Úc</a></li>
	                            	</label>
	                            </li>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i>Hàn Quốc</a></li>
	                            	</label>
	                            </li>
	                            
	                        </ul>
	                    </div>

	                    <div id="menu" style="margin-top: 2em;"><b>GIÁ</b></div>
	                    <div id="dropdown">
	                        <ul>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i> Dưới 100k</a></li>
	                            	</label>
	                            </li>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i>Từ 100k - 200k</a></li>
	                            	</label>
	                            </li>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i> Từ 200k - 500k</a></li>
	                            	</label>
	                            </li>
	                            <li>
	                            	<label style="margin-top: 1em;">
	                            		<input type="checkbox" name="" onclick="">
	                            		<i class="fa"></i> Trên 500k</a></li>
	                            	</label>
	                            </li>
	                        </ul>
	                    </div>
	            </div>
					
				<div class="col-12 col-lg-9 order-1 order-lg-2">
					<div class="row" >
						
							<?php
							$products = $data['productbycatid'];
								// echo "<pre>";
	       //              		print_r($products);
	       //              		echo "</pre>";
							foreach($products as $k => $v){
							?>

							<div class="item" style="margin: 10px;">
						    	<div class="cart">
									<a href="<?php echo PATH; ?>?controller=product&action=detail&id=<?php echo $v['productID'];?>">
										<img class="cart-img" src="<?php echo PATH;?>assets/images/products/<?php echo $v['thumbnail'];?>">
									</a>
									<div class="cart-title"><?php echo $v['productName'];?></div>
									<div class="price">
								    	<span class="price-old"><?php echo $v['unitPrice'];?>đ</span>
								    	<span class="price-new">
								    		<?php echo $v['unitPrice']-($v['unitPrice']*$v['discount'])/100;?>
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
			</div>

		</content>
		<div style="text-align: center; margin-top: 2em;">
			<input type="button" name="1" value="1">
			<input type="button" name="2" value="2">
			<input type="button" name=">" value=">">
			<input type="button" name=">>" value=">>">
		</div>
	</div>