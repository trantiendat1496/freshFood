

<div class="container">
	<content>
		<div class ="news-title-myclass">
			<i class="fas fa-home"></i>
			<a href="index.php">Trang chủ</a>
			 > 
			<span><a href="news.php">Giỏ hàng</a></span>  
		</div>
		<div class="col-12 table-cart">
			<div><h5>Giỏ hàng</h5></div>
			<!--form reload số lượng button[type="submit"]-->
			<form >
				<table border="1px" width="100%" id="detail-cart">
					<tr>
						<td >Ảnh			</td>
						<td >Sản phẩm		</td>
						<td >Đơn giá		</td>
						<td >Số lượng		</td>
						<td >Thành tiền 	</td>
						<td >Xóa			</td>
					</tr>
					<tr>
						<td id="table-img"><img src="assets/images/products/thumb_14912965824762_bao-ngu-han-quoc-song.jpg"></td>
						<td id="table-name"> Bào ngư Hàn Quốc</td>
						<td id="table-price">1.250.000 <span>đ</span></td>
						<td id="table-quantity">
							<div>
								<input type="number" name="" class="number">
								<span>Kg</span>
								<button type="submit" class="btn btn-success"><i class="fa fa-refresh"></i></button>
							</div>
						</td>
						<td id="table-total"></td>
						<td id="table-del">
							<button class="del"><i class="fa fa-times-circle btn btn-danger"></i></button>
						</td>
					</tr>
					<tr>
						<td colspan="4">Tổng tiền</td>
						<td colspan="2"></td>
					</tr>
				</table>
				<div id="button-click">				
					<div >
						<button class="btn btn-danger">Tiếp tục mua hàng</button>
					</div>
					<div >
						<form action="<?php echo PATH;?>?controller=home&action=checkout" method="post">
							<a href="<?php echo PATH;?>?controller=home&action=checkout">
								<input type="button" name="" value="Tiến hành thanh toán" id="btnCheck">
							</a>
						</form>
					</div>
				</div>
			</form>
		</div>
	</content>
</div>

