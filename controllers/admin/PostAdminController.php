<?php
require_once 'publics/imageUpload/checkUpload.php';
require_once 'model/Post.php';
require_once 'model/Category.php';
require_once 'controllers/admin/AdminController.php';
class PostAdminController extends AdminController
{
	protected $model;
  //ở đây tạo một biến mới thể hiện sự liên kết giữa post và category
  protected $post_category;
  public function __construct()
    {
    	
    $this->model = new Post();
    $this->post_category = new Category();
    parent::__construct();
    }
	
	public function index(){
		
		$this->view('admin/layouts/master',['page'=>'home']);
	}
/*đây là chỗ duyệt toàn bộ bài viết tại admin*/
public function listds(){

      $posts =    $this->model->getAll();

      $this->view('admin/layouts/master',['page'=>'post/list','posts'=>$posts]);
      
	}


  /*2 hàm create và store có nhiệm vụ tạo mới bài viết và lưu bài biết vào*/
	public function create(){
      $posts =    $this->model->getAll();
     $categories =    $this->post_category->getAll();
       
       $this->view('admin/layouts/master',['page'=>'post/create','posts'=>$posts,'categories'=>$categories]);


	}
	public function store($data){
    
	 if(isset($_POST['submit'])){
    $data = $_POST;
    $data['posts_slug'] = $this->toSlug($data['posts_name']);
    
    // vào đây để xét duyệt và kiểm tra file
    $uploads = file_upload("publics/imageUpload/postImg","posts_thumbnail",500000,array('jpg', 'png' , 'doc' , 'docx', 'pdf'));
        /*chỉ vào đây khi mà upload không thành công*/
        if(gettype($uploads) == "array"){
          echo "upload bị lỗi rồi";
          print_r($uploads);
          die();
        }
/*đây là khi mà file upload thành công*/
        else{
$file = $_FILES["posts_thumbnail"];

 // lưu vào folder mà mình mong muốn
move_uploaded_file($file["tmp_name"], "publics/imageUpload/postImg/" . $file["name"]);
 $data['posts_thumbnail'] = $file['name'];
 unset($data['submit']);
 $this->model->create($data);
// trở lại index
header('Location: index.php?mod=admin&c=post&act=listds');

            }
                                }	
	}
	// hàm show cho phép xem xét chi tiết một bài viết
	public function show(){
          
          $id = $_GET['id'];
         
         $posts =   $this->model->showOne($id);

         $this->view('admin/layouts/master',['page'=>'post/detail','posts'=>$posts]);
	}
	// hàm edit và update cho phép sửa dữ liệu có trên bài viết
	public function edit(){
     unlink($_GET["name"]);
	  $id = $_GET['id'];
    $categories =    $this->post_category->getAll();
    $posts = $this->model->editOne($id);
    $this->view('admin/layouts/master',['page'=>'post/edit','posts'=>$posts,'categories'=>$categories,'id'=>$id]);   
	}
	public function update(){
		if(isset($_POST['submit'])){
		$data= $_POST;
     
    $data['posts_slug'] = $this->toSlug($data['posts_name']);
		$id = $_GET['id'];
     $uploads = file_upload("publics/imageUpload/postImg","posts_thumbnail",500000,array('jpg', 'png' , 'doc' , 'docx', 'pdf'));
        /*chỉ vào đây khi mà upload không thành công*/
        if(gettype($uploads) == "array"){
          echo "upload bị lỗi rồi";
          print_r($uploads);
        }
/*đây là khi mà file upload thành công*/
        else{
$file = $_FILES["posts_thumbnail"];

 // lưu vào folder mà mình mong muốn
move_uploaded_file($file["tmp_name"], "publics/imageUpload/postImg/" . $file["name"]);
 $data['posts_thumbnail'] = $file['name'];
 unset($data['submit']);
 $posts =   $this->model->updateOne($id , $data);
// trở lại index
header('Location: index.php?mod=admin&c=post&act=listds');

            }
                                } 
	}
	// hàm xử lý xóa
	public function delete(){
		  $id = $_GET['id'];
      unlink($_GET["name"]);
      $this->model->deleteOne($id);
      header("Location: index.php?mod=admin&c=post&act=listds");
	}





  public function toSlug($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
}




  ?>