<div class="container">
	
		<div class ="news-title-myclass">
			<i class="fas fa-home"></i>
			<a href="index.php">Trang chủ</a>
			 > 
			<span><a href="news.php">Chi tiết sản phẩm</a></span>  
		</div>
		<div style="clear: both;"></div>

	
		<?php
		$item = $data['item'];
		?>
		
		<div class="row detail">
			
			<div class="col-4 card">
				<img class="cart-img" src="<?php echo PATH;?>assets/images/products/<?php echo $item['thumbnail'];?>">
			</div>
			<div class="col-4 title">
				<div><h2><?php echo $item['productName'];?></h2></div>
				<div>Mã sản phẩm: <?php echo $item['productID']?></div>
				<div>
					<span>Giá: </span>
					<span><?php echo $item['unitPrice'];?>đ</span>
				</div>
				<div>
					<span>Mô tả:</span>
					<span class="text"><?php echo $item['description'];?></span>
				</div>
			</div>
			<div class="col-4">
				<div>Số lượng</div>
				<input type="text" name="">
				<div class="button">
					<button class="add">Thêm vào giỏ hàng</button>
					<button class="add-now">Mua ngay</button>
				</div>
			</div>

		</div>

		
		
	<div class="brick">
	    <h6 class="title-myclass">SẢN PHẨM LIÊN QUAN</h6>
    </div>

    <div class="owl-carousel owl-theme owl-carousel-myclass1" >

		<?php
		$products = $data['products'];
		foreach($products as $k => $v){
		?>
	    <div class="item">
	    	<div class="cart">
	    		<a href="<?php echo PATH;?>?controller=product&action=detail&id=<?php echo $v['productID'];?>">
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