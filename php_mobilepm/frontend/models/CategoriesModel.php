<?php 
	trait CategoriesModel{
		//liệt kê các danh mục cấp cha
		public function modelListCategories(){
			$conn= Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id=0 order by id desc");
			return $query->fetchAll();
		}
		//liệt kê các danh mục con
		public function modelListCategoriesSub($category_id){
			$conn= Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id=$category_id order by id desc");
			return $query->fetchAll();
		}
	}
 ?>