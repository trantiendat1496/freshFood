<?php
class DB{
	private static $db = NULL;

	public static function connection(){
		if(!isset(self::$db)){
			try{
				self::$db = new PDO('mysql:host=ec2-34-207-226-216.compute-1.amazonaws.com;dbname=freshfood', 'f_user', '123@123a');
      			self::$db->exec("SET NAMES 'utf8'");
			}catch(PDOException $ex){
				echo "Lỗi trong quá trình kết nối CSDL: ". $ex->getMessage();
			}
		}
		return self::$db;
	}
}
?>