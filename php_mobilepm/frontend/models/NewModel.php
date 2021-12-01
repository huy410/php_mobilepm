<?php 
	trait NewModel{
		//lấy 6 tin tức nổi bật
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}
	}
 ?>