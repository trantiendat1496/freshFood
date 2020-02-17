<?php
class Categories
{
	public static function getParentCategoriesID(){
		//Bước 1: Kết nối CSDL
		$db = DB::connection();
		//Bước 2: Tạo truy vấn lấy dữ liệu
		$sql = "SELECT * FROM categories WHERE NOT parentCategoryID=''";
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

	public static function getCategoryID(){
		//Bước 1: Kết nối CSDL
		$db = DB::connection();
		//Bước 2: Tạo truy vấn lấy dữ liệu
		$sql = "SELECT * FROM categories WHERE  parentCategoryID=''";
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
		$db = DB::connection();
		$sql = "SELECT * FROM products WHERE categoryId = ?";
		$stmt = $db->prepare($sql);
		$stmt = bindValue(1, $id);
		$stmt->execute();
		$item = $stmt->fetch(PDO::FETCH_ASSOC);

		return $item;

	}

	

}









?>