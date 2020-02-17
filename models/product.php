<?php
class Product
{
	public static function getAllProduct(){
		//Bước 1: Kết nối CSDL
		$db = DB::connection();
		//Bước 2: Tạo truy vấn lấy dữ liệu
		$sql = "SELECT * FROM products";
		//Bước 3: Chuẩn bị tiến hành truy vấn
		$stmt = $db->prepare($sql);
		$stmt->execute();
		//Bước 4: Tiếp nhận kết quả trả về
		$records = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$records[] = $row;
		}
		return $records;
	}

	public static function getProductByCategoryId($id){
		//Bước 1: Kết nối CSDL
		$db = DB::connection();
		//Bước 2: Tạo truy vấn lấy dữ liệu
		$sql = "SELECT * FROM products WHERE CategoryId = ?";
		//Bước 3: Chuẩn bị tiến hành truy vấn
		$stmt = $db->prepare($sql);
		$stmt->bindValue(1,$id);
		$stmt->execute();
		//Bước 4: Tiếp nhận kết quả trả về
		$records = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$records[] = $row;
		}
		return $records;
	}


	public static function getProductById($id){
		$db = DB::connection();
		$sql = "SELECT * FROM products WHERE productID = ?";
		$stmt = $db->prepare($sql);
		$stmt -> bindValue(1, $id);
		$stmt->execute();
		$item = $stmt->fetch(PDO::FETCH_ASSOC);

		return $item;
	}


	// public static function getProductByCategoryId($id){
	// 	$db = DB::connection();
	// 	$sql = "SELECT * FROM products WHERE CategoryId = ?";
	// 	$stmt = $db->prepare($sql);
	// 	$stmt -> bindValue(1, $id);
	// 	$stmt->execute();
	// 	$cat = $stmt->fetch(PDO::FETCH_ASSOC);

	// 	return $cat;
	// }


	public static function getProductBySearch($name){
		//Bước 1: Kết nối CSDL
		$db = DB::connection();
		//Bước 2: Tạo truy vấn lấy dữ liệu
		$sql = "SELECT * FROM products WHERE productName LIKE ?";
		$stmt = $db->prepare($sql);
		$stmt -> bindValue(1, $name.'%');
		$stmt->execute();
		
		$records = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$records[] = $row;
		}
		return $records;
	}




}




?>