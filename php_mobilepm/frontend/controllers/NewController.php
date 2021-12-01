<?php 
	include "models/NewModel.php";
	class NewController extends Controller{
		use NewModel;
		//hàm mặc định
		public function  index(){
			//load view
			$this->loadView("NewView.php");
		}
	}
 ?>