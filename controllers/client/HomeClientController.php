<?php
require_once 'controllers/BaseController.php';
require_once 'model/Post.php';
require_once 'model/Category.php';
include_once 'model/Model.php';
require_once 'controllers/admin/AdminController.php';

class HomeClientController extends BaseController
{

	function __construct()
	{
		$this->model = new Post();
		$this->post_category = new Category();
		
	}
	// bài viết trong trang chính
	public function home(){
		 $posts =    $this->model->getAll();
		
		
		$this->view('client/layouts/master',['page'=>'home','posts'=>$posts]);
	}
	// hiện ra tất cả bài viết trong db
	public function allPost(){
		$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;//số item trên 1 trang;
        $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
       	$posts =    $this->model->phanTrangPost($item_per_page,$offset);


        //$totalRecords = "SELECT * FROM ".$table;
        $numpage = $this->model->getAllNoData();
       
        $totalRecords = $numpage->num_rows;

        $totalPages = ceil($totalRecords / $item_per_page);
	$this->view('client/layouts/master',['page'=>'getdata','posts'=>$posts,'totalPages'=>$totalPages,'current_page'=>$current_page,'item_per_page'=>$item_per_page]);
	}
	/*hàm này để ta lấy bài viết dựa trên danh mục*/
	public function getCate(){
		$use = $_GET['use'];
		$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;//số item trên 1 trang;
        $current_pageTC = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        $offset = ($current_pageTC - 1) * $item_per_page;
       	$posts =    $this->model->getCateNamePost($item_per_page,$offset,$use);


        //$totalRecords = "SELECT * FROM ".$table;
        $numpage = $this->model->getAllNoDataCate($use);
       
        $totalRecords = $numpage->num_rows;

        $totalPagesTC = ceil($totalRecords / $item_per_page);
	$this->view('client/layouts/master',['page'=>'getCate','posts'=>$posts,'totalPagesTC'=>$totalPagesTC,'current_pageTC'=>$current_pageTC,'item_per_page'=>$item_per_page]);
	    
	  $this->view('client/layouts/master',['page'=>'getdata','posts'=>$posts]);        
	  }


         public function getCateHT(){
		$use = $_GET['use'];
		$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;//số item trên 1 trang;
        $current_pageHT = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        $offset = ($current_pageHT - 1) * $item_per_page;
       	$posts =    $this->model->getCateNamePost($item_per_page,$offset,$use);

        //$totalRecords = "SELECT * FROM ".$table;
        $numpage = $this->model->getAllNoDataCate($use);
       
        $totalRecords = $numpage->num_rows;

        $totalPagesHT = ceil($totalRecords / $item_per_page);
	$this->view('client/layouts/master',['page'=>'getCateHT','posts'=>$posts,'totalPagesHT'=>$totalPagesHT,'current_pageHT'=>$current_pageHT,'item_per_page'=>$item_per_page]);
	    
	  $this->view('client/layouts/master',['page'=>'getdata','posts'=>$posts]);        
	  }



	  public function getCateDL(){
		$use = $_GET['use'];
		$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;//số item trên 1 trang;
        $current_pageDL = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        $offset = ($current_pageDL - 1) * $item_per_page;
       	$posts =    $this->model->getCateNamePost($item_per_page,$offset,$use);

        //$totalRecords = "SELECT * FROM ".$table;
        $numpage = $this->model->getAllNoDataCate($use);
       
        $totalRecords = $numpage->num_rows;

        $totalPagesDL = ceil($totalRecords / $item_per_page);
	$this->view('client/layouts/master',['page'=>'getCateDL','posts'=>$posts,'totalPagesDL'=>$totalPagesDL,'current_pageDL'=>$current_pageDL,'item_per_page'=>$item_per_page]);
	    
	  $this->view('client/layouts/master',['page'=>'getdata','posts'=>$posts]);        
	  }



	public function viewdetail(){
		$id = $_GET['id'];
		$posts =    $this->model->showOne($id);
		
		 $this->view('client/layouts/master',[
			'page'=>'viewdetail',
			'posts'=>$posts,
		]);
	}
	
	public function search($data){
		$data = $_POST;
		$model = new Post();
		$posts  = $model->searchName($data['key']);
		$this->view('client/layouts/master',[
			'page'=>'search',
			'posts'=>$posts,
			'key'=>$data['key']
		]);
	}
}




  ?>