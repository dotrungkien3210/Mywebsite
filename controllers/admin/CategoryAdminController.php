<?php
require_once 'model/Category.php';
require_once 'controllers/admin/AdminController.php';
class CategoryAdminController extends AdminController
{
	 private $model;

    public function __construct()
    {
        $this->model = new Category();
        parent::__construct();
    }
	
	public function index(){
		
		$this->view('admin/layouts/master',['page'=>'home']);
	}

public function listds(){

      $categories =    $this->model->getAll();
      $this->view('admin/layouts/master',['page'=>'category/list','categories'=>$categories]);
	}
	//2 hàm create và store để tạo ra một danh mục mới
	public function create(){
		$this->view('admin/layouts/master',['page'=>'category/create']);
      
	}
	public function store($data){
	$data =$_POST;
		 $this->model->create($data);
		header('Location: index.php?mod=admin&c=category&act=listds');
	}
	// hàm show cho phép ta xem chi tiết một danh mục gồm những gì sau khi click vào nút detail
	public function show(){
          
          $id = $_GET['id'];

         
         $categories =   $this->model->showOne($id);
         $this->view('admin/layouts/master',['page'=>'category/detail','categories'=>$categories]);
		
	}
	// hai làm edit và update để sửa đổi danh mục mình muốn
	public function edit(){
	 $id = $_GET['id'];
      $categories = $this->model->editOne($id);
      $this->view('admin/layouts/master',['page'=>'category/edit','categories'=>$categories,'id'=>$id]);
    /*$page ='category/edit';
      require_once "views/admin/layouts/master.php";   */
	}
	public function update(){
		$data= $_POST;
		$id = $_GET['id'];
         $categories =   $this->model->updateOne($id , $data);
   header('Location: index.php?mod=admin&c=category&act=listds');
	}
	// hàm xử lý xóa
	public function delete(){
		  $id = $_GET['id'];
          
          
            $this->model->deleteOne($id);
          
         header("Location: index.php?mod=admin&c=category&act=listds");
	}
}
  ?>