<?php
require_once 'publics/imageUpload/checkUpload.php';
require_once 'model/User.php';
require_once 'controllers/admin/AdminController.php';
class UserAdminController extends AdminController
{
	 private $model;

    public function __construct()
    {
        $this->model = new User();
        parent::__construct();
    }
	
	public function index(){
		
		$this->view('admin/layouts/master',['page'=>'home']);
	}

public function listds(){

      $users =    $this->model->getAll();
      $this->view('admin/layouts/master',['page'=>'user/list','users'=>$users]);
	}


	
	public function create(){
		 $users =    $this->model->getAll();
		  $this->view('admin/layouts/master',['page'=>'user/create','users'=>$users]);
	}



		public function store($data){
	 if(isset($_POST['submit'])){
    $data = $_POST;
   
    
    // vào đây để xét duyệt và kiểm tra file
    $uploads = file_upload("publics/imageUpload/userImg","users_thumbnail",500000,array('jpg', 'png' , 'doc' , 'docx', 'pdf'));
        /*chỉ vào đây khi mà upload không thành công*/
        if(gettype($uploads) == "array"){
          echo "upload bị lỗi rồi";
          print_r($uploads);
          die();
        }
/*đây là khi mà file upload thành công*/
        else{
$file = $_FILES["users_thumbnail"];

 // lưu vào folder mà mình mong muốn
move_uploaded_file($file["tmp_name"], "publics/imageUpload/userImg/" . $file["name"]);
 $data['users_thumbnail'] = $file['name'];
 unset($data['submit']);
 $this->model->create($data);
// trở lại index
header('Location: index.php?mod=admin&c=user&act=listds');

            }
                                }	
	}





	// hàm trả về giao diện mới
	public function show(){
          
          $id = $_GET['id'];

         
         $users =   $this->model->showOne($id);
         $this->view('admin/layouts/master',['page'=>'user/detail','users'=>$users]);
		
	}
	// hàm trả về giao diện mới
	public function edit(){
	unlink($_GET["name"]);
	$id = $_GET['id'];
    $users = $this->model->editOne($id);
       $this->view('admin/layouts/master',['page'=>'user/edit','users'=>$users,'id'=>$id]);
	}
	// hàm xử lý cập nhật
	public function update(){
		if(isset($_POST['submit'])){
			
		$data= $_POST;

		$id = $_GET['id'];
     $uploads = file_upload("publics/imageUpload/userImg","users_thumbnail",500000,array('jpg', 'png' , 'doc' , 'docx', 'pdf'));
        /*chỉ vào đây khi mà upload không thành công*/
        if(gettype($uploads) == "array"){
          echo "upload bị lỗi rồi";
          print_r($uploads);
          die();
        }
/*đây là khi mà file upload thành công*/
        else{
$file = $_FILES["users_thumbnail"];

 // lưu vào folder mà mình mong muốn
move_uploaded_file($file["tmp_name"], "publics/imageUpload/userImg/" . $file["name"]);
 $data['users_thumbnail'] = $file['name'];
 unset($data['submit']);
 $users =   $this->model->updateOne($id , $data);
// trở lại index
header('Location: index.php?mod=admin&c=user&act=listds');

            }
                                } 
	}	// hàm xử lý xóa
	public function delete(){
		  $id = $_GET['id'];
          unlink($_GET["name"]);
          
            $this->model->deleteOne($id);
          
         header("Location: index.php?mod=admin&c=user&act=listds");
	}
}



  ?>