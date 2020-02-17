<div class="container">
		<content>
			
			<div class="row">
				<div class="col-12">
					<div class ="news-title-myclass">
				<i class="fas fa-home"></i>
				<a href="index.php">Trang chủ</a>
				 > 
				<span><a href="product.php">Tìm kiếm</a></span>  
			</div>
			
			<h2>Tìm kiếm</h2>
			<div class="row search">
				<div class="col-12 col-lg-8">
					<div class="row">
						<div class="col-12 col-lg-3">
						<input type="text" name="" placeholder=" Tìm kiếm ">
					</div>
					<div class="col-12 col-lg-3">
						<select style="background-color: #f7f7f7;">
							<option value="1"> Tất cả danh mục		</option>
							<option value="2"> Hải sản nhập khẩu	</option>
							<option value="3"> Hải sản tươi sống	</option>
							<option value="4"> Thịt tươi sống	</option>
							<option value="5"> Rau ăn lá			</option>
							<option value="6"> Củ quả tươi			</option>
							<option value="7"> Rau gia vị	</option>
							<option value="8"> Hoa quả tươi		</option>
							<option value="9"> Đồ uống				</option>
						</select>
					</div>
					<div class="col-12 col-lg-4">
						<label>
							<input type="checkbox" name="" value="10" style="line-height: 2.5;"> Tìm trong danh mục con
						</label>
					</div>
					<div class="col-12 col-lg-2">
						<button type="button">Tìm</button>
					</div>
					</div>
				</div>
				</div>
				
			</div>
				

				<?php
				$search = $data['products'];
				// echo "<pre>";
				// print_r($search);			
				// echo "</pre>";
				foreach($search as $k => $v){			
				?>
				<div class="row">
					<div class="col">
						<div class="item" style="margin: 10px;">
					    	<div class="cart">
								<a href="<?php echo PATH;?>?controller=product&action=detail&id=<?php echo $v['productID'];?>">
									<img class="cart-img" src="<?php echo PATH;?>assets/images/products/<?php echo $v['thumbnail'];?>">
								</a>
								<div class="cart-title"><?php echo $v['productName'];?></div>
								<div class="price">
							    	<span class="price-old"><?php echo $v['unitPrice'];?>đ</span>
							    	<span class="price-new">
							    		<?php echo $v['unitPrice']-($v['unitPrice']*$v['discount'])/100;?>đ
							    	</span>
								</div>
								<div class="link-cart">
									<a href="#">
										<i class="fa fa-shopping-cart"></i> Thêm vào giỏ
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php
			    }
				?>
				
					
			</div>
		</content>
	</div>

	