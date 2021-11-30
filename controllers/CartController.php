<?php 
	include "models/CartModel.php";
	class CartController extends Controller{
		use CartModel;
		public function __construct(){
			//kiem tra neu gio hang chua ton tai thi khoi tao no
			if(isset($_SESSION["cart"]) == false)
				$_SESSION['cart']= array();
		}
		//hien thi danh sach cac san pham trong gio hang
		public function index(){
			$this->loadView("CartView.php");
		}
		public function submit(){
			$this->loadView("SubmitView.php");
		}
		public function customer(){
			$this->loadView("CustomerView.php");
		}
		//them san pham vao gio hang
		public function create(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham trong model
			$this->cartAdd($id);
			header("location:index.php?controller=cart");
		}
		//xoa san pham khoi gio hang
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham trong model
			$this->cartDelete($id);
			header("location:index.php?controller=cart");
		}
		//xoa tat ca cac san pham khoi gio hang
		public function destroy(){
			//goi ham trong model
			$this->cartDestroy();
			header("location:index.php?controller=cart");
		}
		public function discount(){
			//goi ham trong model
			$this->cartDiscount();
			header("location:index.php?controller=cart");
		}
		//cap nhat so luong san pham
		public function update(){
			
				$id = isset($_GET["id"]) ? $_GET["id"] : 0;
				$number = isset($_GET["number"]) ? $_GET["number"] : 0;
				$this->cartUpdate($id,$number);				
			
			header("location:index.php?controller=cart");
		}
		//thanh toan gio hang
		public function checkout(){
				$this->cartCheckOut();
				// header("location:index.php?controller=cart&action=submit");
				//&action=submit
		}
	}
 ?>