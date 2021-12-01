<?php 
	//include file model
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//su dung file model o day
		use SearchModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function productName(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 9;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchProductName($key,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelReadSearchProductName($key,$recordPerPage);
			$record = $this->a();
			//load view, truyen du lieu ra view
			$this->loadView("SearchProductNameView.php",["data"=>$data,"numPage"=>$numPage,"record"=>$record]);
		}
		public function productPrice(){
			
			$range = isset($_GET["range"]) ? $_GET["range"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 9;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchProductPrice($range,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelReadSearchProductPrice($range,$recordPerPage);
			$record = $this->a();
			//load view, truyen du lieu ra view
			$this->loadView("SearchProductPriceView.php",["data"=>$data,"numPage"=>$numPage,"record"=>$record]);
		}
		public function smartSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$data = $this->modelSmartSearch($key);
			foreach($data as $rows){
				echo "<li><img style='width:100px;' src='../assets/upload/products/$rows->photo'> <a href='index.php?controller=products&action=detail&id=$rows->id' style='font-weight: lighter'>$rows->name<p>$rows->price đ<p></a></li>";
			}
		}		
	}
 ?>