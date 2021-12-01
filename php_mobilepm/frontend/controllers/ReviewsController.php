<?php 
	//include file model
	include "models/ReviewsModel.php";
	class ReviewsController extends Controller{
		//su dung file model o day
		use ReviewsModel;
		//chi tiet san pham
		public function writeReview(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->UpdateReview($id);
			header("location:index.php?controller=products&action=detail&id=$id");
		}
	}
 ?>