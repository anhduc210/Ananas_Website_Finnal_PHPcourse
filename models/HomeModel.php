<?php 
	trait HomeModel{
		//san pham noi bat (6 san pham)
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_status like '11' order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//lay cac danh muc co chua san pham ben trong
		public function modelCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id in (select category_id from products)");
			return $query->fetchAll();
		}
		//lay cac san pham thuoc danh muc
		public function modelProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $category_id order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//lay 10 tin noi bat de hien thi o trang chu
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot = 1 order by id desc limit 0,10");
			return $query->fetchAll();
		}
	}
 ?>