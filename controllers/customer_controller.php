<?php
require_once("controllers/base_controller.php");
// require_once("models/customer.php");

class CustomerController extends BaseController{
	public function __construct(){
		//Khai báo thư mục chứa các view của Product
		$this->folder = "customer";
	}

	//Tạo action đã đăng ký trong 'route'
	public function login(){
		$this->render("login");
	}

	public function register(){
		$this->render("register");
	}
}
?>









