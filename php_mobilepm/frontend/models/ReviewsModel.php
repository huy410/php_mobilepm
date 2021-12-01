<?php 
	trait ReviewsModel{
		public function UpdateReview($id){
			$name = isset($_POST["name"]) ? $_POST["name"] : "";
			$title = isset($_POST["title"]) ? $_POST["title"] : "";
			$review = isset($_POST["review"]) ? $_POST["review"] : "";
			$star = isset($_POST["star"]) ? $_POST["star"] : 0;
			$email = $_SESSION["customer_email"];
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$query=$conn->query("select * from rating where email='$email' and product_id=$id");
			$result = $query->rowCount();
			if ($result>0) {
				$conn->query("delete from rating where email='$email' and product_id=$id");	
			}
			$conn->query("insert into rating set title='$title',review='$review',product_id=$id,star=$star,name='$name',email='$email'");
			
		}
	}	
 ?>