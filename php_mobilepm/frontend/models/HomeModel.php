<?php 
	trait HomeModel{
		//lấy 12 sản phẩm nổi bật
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc limit 0,12");
			return $query->fetchAll();
		}
		//hiển thị các danh mục có trường displayhome=1
		public function modelListCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where displayhome=1 order by id desc");
			return $query->fetchAll();
		}
		//lấy 8 sp  mac
		public function modelListProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id=$category_id order by id desc  limit 0,8");
			return $query->fetchAll();
		}
		//lấy 6 tin tức nổi bật
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}
	}
 ?>