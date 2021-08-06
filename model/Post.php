<?php 
include_once 'model/Model.php';
/**
 * 
 */
class Post extends Model
{
	public function __construct(){
		parent::__construct();
		$this->table = 'posts';
	}
var $table = 'posts';

	   function getAll(){

	         return $this->getNew();
	          
	  }
	   function getAllNoData(){

	         return $this->selectNoData($this->table);
	          
	  }
	   function getAllNoDataCate($use){

	         return $this->selectNoDataCate($this->table,$use);
	          
	  }
	  function create($data){

         return $this->insert($this->table,$data);
	  }
	 function showOne($id){
	 	
	 	return $this->detail($this->table,$id);
	 }
	  function editOne($id){
	  	       
         return $this->editModel($this->table,$id);
	  }
	  public function updateOne($id , $data) {
	  	
        $this->update($data,$id);
        
    }
	 function deleteOne($id){
	 
	 	return $this->delete($this->table,$id);

	 }
	 function getCateNamePost($item_per_page,$offset,$use){

	         return $this->getCateNameModel($this->table,$item_per_page,$offset,$use);
	          
	  }

	   function phanTrangPost($item_per_page,$offset){

	         return $this->phanTrangModel($this->table,$item_per_page,$offset);
	          
	  }
}



?>