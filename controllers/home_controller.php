<?php
require_once("controllers/base_controller.php");
require_once("models/product.php");
require_once("models/categories.php");

class HomeController extends BaseController{
	public function __construct(){
		//Khai báo thư mục chứa các view của Home
		$this->folder = "home";
	}

	//Tạo action đã đăng ký trong 'route'
	public function index(){
		//Lấy dữ liệu từ Model
		$arrPro = Product::getAllProduct();
		$arrParentCatID = Categories::getParentCategoriesID();
		$arrCatById = Categories::getCategoryID();
		
		$data = array('parentcatid'=>$arrParentCatID,'catid'=>$arrCatById,'product'=>$arrPro);
		//Đổ dữ liệu, biểu diễn ra view tương ứng
		// $this->render("home",$data);
		$this->render("home",$data);

	}
	public function product(){
		//Lấy dữ liệu từ Model
		$arrPro = Product::getAllProduct();
		$data = array('products'=>$arrPro);
		//Đổ dữ liệu, biểu diễn ra view tương ứng
		// $this->render("home",$data);
		$this->render("product",$data);
	}

	public function productbycatid(){
		$catid = isset($_GET['catid'])?$_GET['catid']:"";
		if (!empty($catid)) {
			$pro = Product::getProductByCategoryId($catid);
			$data =  array('productbycatid'=>$pro);
			$this->render("category",$data);
			$this->render("home",$data);
		}
	}

	
	

	public function detail(){
		$arrDetail = Detail::getDetailById($id);
		$data = array('products'=>$arrDetail);
		$this->render("detail",$data);
	}

	public function cart(){
		$this->render("cart");
	}
	public function checkout(){
		$this->render("checkout");
	}

	
	public function news(){
		$this->render("news");
	}
	public function contact(){
		$this->render("contact");
	}
	public function introdue(){
		$this->render("introdue");
	}
	public function search(){
		$name = $_POST['search'];
		$arrPro = Product::getProductBySearch($name);
		$data = array('products'=>$arrPro);
		$this->render("search",$data);
	}




}
?>









