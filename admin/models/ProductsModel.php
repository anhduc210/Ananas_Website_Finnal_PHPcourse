<?php 
	trait ProductsModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from products where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST["name"];
			$description = $_POST["description"];
			$hot = isset($_POST["hot"]) ? 1 : 0;	
			$price = $_POST["price"];	
			$discount = $_POST["discount"];	
			$category_id = $_POST["category_id"];
			$category_status = $_POST["category_status"];	
			$category_type = $_POST["category_type"];	
			$category_line = $_POST["category_line"];
			$category_color = $_POST["category_color"];				
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("update products set name=:var_name,description=:var_description,hot=:var_hot ,price=:var_price,discount=:var_discount,category_id=:var_category_id,category_status=:var_category_status,category_type=:var_category_type,category_line=:var_category_line,category_color=:var_category_color where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_description"=>$description,"var_hot"=>$hot,"var_price"=>$price,"var_discount"=>$discount,"var_category_id"=>$category_id,"var_category_status"=>$category_status,"var_category_type"=>$category_type,"var_category_line"=>$category_line,"var_category_color"=>$category_color]);
			//---
			//neu user upload anh thi thuc hien upload			
			$photo = "";
			/*
				- $_FILES["photo"]["name"] -> lay ten file
				- time() -> tra ve mot so nguyen chi thoi gian hien tai
				- $_FILES["photo"]["tmp_name"] -> khi an nut submit thi file se duoc dua len thu muc tmp cua bo cai php (co duoi la .tmp)
				- move_uploaded_file -> chuyen file tu thu muc tmp sang thu muc muon upload
				- unlink(duongdanfile) -> xoa ten file
			*/
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from products where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
						unlink("../assets/upload/products/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
				$query = $conn->prepare("update products set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
			$photo2 = "";
			if($_FILES["photo2"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto2 = $conn->query("select photo2 from products where id=$id");
				if($oldPhoto2->rowCount() > 0){
					$record = $oldPhoto2->fetch();
					//xoa anh
					if($record->photo2 != "" && file_exists("../assets/upload/products/".$record->photo2))
						unlink("../assets/upload/products/".$record->photo2);
				}
				//---
				$photo2 = time()."_".$_FILES["photo2"]["name"];
				move_uploaded_file($_FILES["photo2"]["tmp_name"],"../assets/upload/products/$photo2");
				$query = $conn->prepare("update products set photo2=:var_photo2 where id=$id");
				$query->execute(array("var_photo2"=>$photo2));
			}
			$photo3 = "";
			if($_FILES["photo3"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto3 = $conn->query("select photo3 from products where id=$id");
				if($oldPhoto2->rowCount() > 0){
					$record = $oldPhoto3->fetch();
					//xoa anh
					if($record->photo3 != "" && file_exists("../assets/upload/products/".$record->photo3))
						unlink("../assets/upload/products/".$record->photo3);
				}
				//---
				$photo3 = time()."_".$_FILES["photo3"]["name"];
				move_uploaded_file($_FILES["photo3"]["tmp_name"],"../assets/upload/products/$photo3");
				$query = $conn->prepare("update products set photo3=:var_photo3 where id=$id");
				$query->execute(array("var_photo3"=>$photo3));
			}
			$photo4 = "";
			if($_FILES["photo4"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto4 = $conn->query("select photo4 from products where id=$id");
				if($oldPhoto4->rowCount() > 0){
					$record = $oldPhoto2->fetch();
					//xoa anh
					if($record->photo4 != "" && file_exists("../assets/upload/products/".$record->photo4))
						unlink("../assets/upload/products/".$record->photo4);
				}
				//---
				$photo4 = time()."_".$_FILES["photo4"]["name"];
				move_uploaded_file($_FILES["photo4"]["tmp_name"],"../assets/upload/products/$photo4");
				$query = $conn->prepare("update products set photo4=:var_photo4 where id=$id");
				$query->execute(array("var_photo4"=>$photo4));
			}
			//---
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$description = $_POST["description"];
			$hot = isset($_POST["hot"]) ? 1 : 0;	
			$price = $_POST["price"];	
			$discount = $_POST["discount"];	
			$category_id = $_POST["category_id"];
			$category_status = $_POST["category_status"];	
			$category_type = $_POST["category_type"];	
			$category_line = $_POST["category_line"];
			$category_color = $_POST["category_color"];		
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//neu user upload anh thi thuc hien upload			
			$photo = "";
			/*
				- $_FILES["photo"]["name"] -> lay ten file
				- time() -> tra ve mot so nguyen chi thoi gian hien tai
				- $_FILES["photo"]["tmp_name"] -> khi an nut submit thi file se duoc dua len thu muc tmp cua bo cai php (co duoi la .tmp)
				- move_uploaded_file -> chuyen file tu thu muc tmp sang thu muc muon upload
				- unlink(duongdanfile) -> xoa ten file
			*/
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
			}
			$photo2 = "";
			if($_FILES["photo2"]["name"] != ""){
				$photo2 = time()."_".$_FILES["photo2"]["name"];
				move_uploaded_file($_FILES["photo2"]["tmp_name"],"../assets/upload/products/$photo2");
			}

			$photo3 = "";
			if($_FILES["photo3"]["name"] != ""){
				$photo3 = time()."_".$_FILES["photo3"]["name"];
				move_uploaded_file($_FILES["photo3"]["tmp_name"],"../assets/upload/products/$photo3");
			}

			$photo4 = "";
			if($_FILES["photo4"]["name"] != ""){
				$photo4 = time()."_".$_FILES["photo4"]["name"];
				move_uploaded_file($_FILES["photo4"]["tmp_name"],"../assets/upload/products/$photo4");
			}
			//---		
			//update name			
			//chuan bi truy van
			$query = $conn->prepare("insert into products set name=:var_name,description=:var_description,hot=:var_hot,photo=:var_photo,photo2=:var_photo2,photo3=:var_photo3,photo4=:var_photo4,price=:var_price,discount=:var_discount,category_id=:var_category_id,category_status=:var_category_status,category_type=:var_category_type,category_line=:var_category_line,category_color=:var_category_color");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_description"=>$description,"var_hot"=>$hot,"var_photo"=>$photo,"var_photo2"=>$photo2,"var_photo3"=>$photo3,"var_photo4"=>$photo4,"var_price"=>$price,"var_discount"=>$discount,"var_category_id"=>$category_id,"var_category_status"=>$category_status,"var_category_type"=>$category_type,"var_category_line"=>$category_line,"var_category_color"=>$category_color]);
			
		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from products where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
					unlink("../assets/upload/products/".$record->photo);
			}

			$oldPhoto2 = $conn->query("select photo2 from products where id=$id");
			if($oldPhoto2->rowCount() > 0){
				$record = $oldPhoto2->fetch();
				//xoa anh
				if($record->photo2 != "" && file_exists("../assets/upload/products/".$record->photo2))
					unlink("../assets/upload/products/".$record->photo2);
			}
			$oldPhoto3 = $conn->query("select photo3 from products where id=$id");
			if($oldPhoto3->rowCount() > 0){
				$record = $oldPhoto3->fetch();
				//xoa anh
				if($record->photo3 != "" && file_exists("../assets/upload/products/".$record->photo3))
					unlink("../assets/upload/products/".$record->photo3);
			}
			$oldPhoto4 = $conn->query("select photo4 from products where id=$id");
			if($oldPhoto4->rowCount() > 0){
				$record = $oldPhoto4->fetch();
				//xoa anh
				if($record->photo4 != "" && file_exists("../assets/upload/products/".$record->photo4))
					unlink("../assets/upload/products/".$record->photo4);
			}
			//---
			//chuan bi truy van
			$query = $conn->prepare("delete from products where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
		//liet ke cac danh muc cap 1 (cap con cua cap cha)
		public function modelCategoriesSub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			//tra ve tat ca cac ket qua lay duoc
			return $query->fetchAll();
		}
		//liet ke cac danh muc cap 0
		public function modelCategories(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			//tra ve tat ca cac ket qua lay duoc
			return $query->fetchAll();
		}
	}
 ?>