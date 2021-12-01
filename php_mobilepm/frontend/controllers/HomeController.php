<?php 
	include "models/HomeModel.php";
	class HomeController extends Controller{
		use HomeModel;
		//hàm mặc định
		public function  index(){
			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>