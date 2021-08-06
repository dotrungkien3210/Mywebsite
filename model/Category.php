<?php 
include_once 'model/Model.php';
/**
 * 
 */
class Category extends Model
{
	public function __construct(){
		parent::__construct();
		$this->table = 'categories';
	}
var $table = 'categories';

	   function getAll(){

	         return $this->select($this->table);
	          
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

}



?>