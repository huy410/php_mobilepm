<?php ini_set('memory_limit', '16M'); ?>
<?php 
	//include file model
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//su dung file model o day
		use ProductsModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function category(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 9;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($category_id,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($category_id,$recordPerPage);
			$record = $this->a();
			//load view, truyen du lieu ra view
			$this->loadView("ProductsCategoryView.php",["data"=>$data,"numPage"=>$numPage,"record"=>$record]);
		}		
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			$data = $this->related($id);
			$review = $this->modelReview($id);
			$reviews = $this->modelReviews($id);
			$avg = $this->modelReviewAvg($id);
			//load view, truyen du lieu ra view
			$this->loadView("ProductsDetailView.php",["record"=>$record,"data"=>$data,"avg"=>$avg,"review"=>$review,"reviews"=>$reviews]);
		}
		//danh gia so sao
		public function rating(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$star = isset($_GET["star"]) ? $_GET["star"] : 0;
			$this->modelRating($id,$star);
			//di chuyen den trang chi tiet san pham
			header("location:index.php?controller=products&action=detail&id=$id");
		}
		public function all1()
		{
		    $data1 =$this->all1();
		    $this->loadView("allview.php");
		}
	}
 ?>