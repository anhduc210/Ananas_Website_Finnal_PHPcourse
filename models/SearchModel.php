<?php 
	trait SearchModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%' order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay ve danh sach cac ban ghi
		public function modelReadSearchPrice($recordPerPage){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecordSearchPrice(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay ve danh sach cac ban ghi
		public function modelReadAll($recordPerPage){
			$keyid = isset($_GET["keyid"]) ? $_GET["keyid"] : "";
			$keystatus = isset($_GET["keystatus"]) ? $_GET["keystatus"] : "";
			$keytype = isset($_GET["keytype"]) ? $_GET["keytype"] : "";
			$keyline = isset($_GET["keyline"]) ? $_GET["keyline"] : "";
			$keycolor = isset($_GET["keycolor"]) ? $_GET["keycolor"] : "";
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			if($keyid !=Null){
				$query_id = $conn->query("select * from products where category_id like '%$keyid%' order by id desc limit $from, $recordPerPage");
				$query =$query_id;
			}
			if($keystatus !=Null){
				$query_status = $conn->query("select * from products where category_status like '%$keystatus%' order by id desc limit $from, $recordPerPage");
				$query = $query_status;
			}
			if($keytype !=Null){
				$query_type = $conn->query("select * from products where category_type like '%$keytype%' order by id desc limit $from, $recordPerPage");
				$query = $query_type;
			}
			if($keyline !=Null){
				$query_line = $conn->query("select * from products where category_line like '%$keyline%' order by id desc limit $from, $recordPerPage");
				$query = $query_line;
			}
			if($keycolor !=Null){
				$query_color = $conn->query("select * from products where category_color like '%$keycolor%' order by id desc limit $from, $recordPerPage");
				$query = $query_color;
			}
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		public function modelTotalRecordAll(){
			$keyid = isset($_GET["keyid"]) ? $_GET["keyid"] : "";
			$keystatus = isset($_GET["keystatus"]) ? $_GET["keystatus"] : "";
			$keytype = isset($_GET["keytype"]) ? $_GET["keytype"] : "";
			$keyline = isset($_GET["keyline"]) ? $_GET["keyline"] : "";
			$keycolor = isset($_GET["keycolor"]) ? $_GET["keycolor"] : "";
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
		
			if($keyid !=null){
				$query_id = $conn->query("select * from products where category_id like '%$keyid%'");
				$query = $query_id;
			}
			if($keystatus !=Null){
				$query_status = $conn->query("select * from products where category_status like '%$keystatus%'");
				$query = $query_status;
			}
			if($keytype !=null){
				$query_type =$conn->query("select * from products where category_type like '%$keytype%'");
				$query = $query_type;
			}
			if($keyline !=null){
				$query_line = $conn->query("select * from products where category_line like '%$keyline%'");
				$query =$query_line;
			}
			if($keycolor !=null){
				$query_color = $conn->query("select * from products where category_color like '%$keycolor%'");
				$query = $query_color;
			}
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		

		public function modelAjaxSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve tat ca ket qua
			return $query->fetchAll();
		}
	}
 ?>