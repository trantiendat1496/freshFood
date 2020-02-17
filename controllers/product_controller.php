<?php
require_once("controllers/base_controller.php");
require_once("models/product.php");

class ProductController extends BaseController{
	public function __construct(){
		//Khai báo thư mục chứa các view của Product
		$this->folder = "product";
	}

	//Tạo action đã đăng ký trong 'route'
	public function product(){
		//Lấy dữ liệu từ Model
		$arrPro = Product::getAllProduct();
		$data = array('products'=>$arrPro);
		//Đổ dữ liệu, biểu diễn ra view tương ứng
		$this->render("product",$data);
	}
	



	public function category(){
		//Lấy dữ liệu từ Model
		$arrPro = Categiries::getAllCategories();
		$data = array('categiries'=>$arrCat);
		//Đổ dữ liệu, biểu diễn ra view tương ứng
		$this->render("home",$data);
	}

	public function detail(){
		//Kiểm tra sự tồn tại của mã sản phẩm
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		if(!empty($id)){
			//Lấy dữ liệu của sản phẩm theo mã sản phẩm;
			$item= Product::getProductById($id);
			$data = array('item'=>$item);
			//Đưa dữ liệu ra view chi tiet de hien thi
			$this->render("detail", $data);
		}else{
			header("location:".PATH."?controller=page&action=error");
		}
	}


	public function relatedProducts(){
		$arrDetail = Detail::getDetailById($id);
		$data = array('products'=>$arrDetail);
		$this->render("detail",$data);
	}
}
?>
