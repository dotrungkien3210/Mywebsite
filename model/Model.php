<?php


include_once "model/connection.php";
class Model
{
	var $conn;

	function __construct(){
    	
    	$connection  = new connection();
    	$this->conn = $connection->connect();
	}

    function select($table){
		$query = " SELECT * FROM ".$table;


		$result = $this->conn->query($query);

		$data = array();
		

		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}

		return $data;
	}
	// dùng cho nút bài viết load tất cả bài viết và phân trang
	 function phanTrangModel($table,$item_per_page,$offset){
	
        $products = "SELECT * FROM ". $table ." ORDER BY ".$table."_id DESC  LIMIT " . $item_per_page . " OFFSET " . $offset;
       	$result = $this->conn->query($products);
       	$data = array();
		

		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}
		return $data;
	}

	function selectNoData($table){
		$query = " SELECT * FROM ".$table." ORDER BY posts_created_at DESC";


		$result = $this->conn->query($query);

		return $result;
	}

	function selectNoDataCate($table,$use){
				$query = "SELECT * FROM $this->table WHERE ".$this->table."_category=" . "'" .  $use . "' ORDER BY posts_created_at DESC" ;

		$result = $this->conn->query($query);

		return $result;
	}


// insert table để duyệt được 
function insert($table,$data){
	
	$query = "INSERT INTO $table ";
	$string1 = '';
	$string2 = '';
	$i = 0;
	foreach ($data as $column => $value) {
		$i++;
		$string1 .= $column;
		if ($i != count($data) ) {
			$string1 .= ',';
		}
		$string2 .= "'".$value."'";
		if ($i != count($data)) {
			$string2 .= ",";
		}
	}
	$string = '('.$string1.')'.' VALUES '.'('.$string2.')';
	
	$query = $query . $string;
	
	$status = $this->conn->query($query);
	return $status;
}
function detail($table,$id){
	 $query = "SELECT * from ".$table." WHERE ".$table."_id = " . $id;


	$status = $this->conn->query($query);
	$data = array();
		while($row = $status->fetch_assoc()) { 
			$data[] = $row;
		}
			
		return $data;
}
function editModel($table,$id){
	
	$query = "SELECT * FROM $this->table where ".$this->table."_id = " . $id;
   
        $result = $this->conn->query($query);
    
        $status = $result->fetch_assoc();
        return $status;

}
function update($data , $id) {
        $string_1 = "";
        $i = 0;

        $query = "UPDATE  $this->table SET ";
        $query_1 = " where ".$this->table."_id = $id";

        foreach($data as $column => $value){
            $string_1 .= $column . " = " ."'". $value ."'";
            $i++;

            if($i == 0) {
                $value = $id;
            }
            if($i != count($data)) {
                $string_1 .= " , ";
            } 
        }
        
        $query = $query . $string_1 . $query_1;
        $status = $this->conn->query($query);
        return $status;
    }


function delete($table,$id){
	$query = "DELETE FROM $table WHERE ".$table."_id = '$id';";
	$status = $this->conn->query($query);
	return $status;
}
public function searchName($key){
	$query = "SELECT * FROM $this->table WHERE posts_name LIKE '%".$key."%'";
	$result = $this->conn->query($query);

		$data = array();
		

		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}

		return $data;
}


public function getCateNameModel($table,$item_per_page,$offset,$use){

        $query = "SELECT * FROM $this->table WHERE ".$this->table."_category=" . "'" .  $use . "'"." ORDER BY ".$table."_id DESC  LIMIT " . $item_per_page . " OFFSET " . $offset;


        $result = $this->conn->query($query);

		$data = array();
		

		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}

		return $data;
	
}

public function getByName($name) {
        $query = "SELECT * FROM $this->table where ".$this->table."_name=" . "'" .  $name . "'";

        $result = $this->conn->query($query);
        $user = $result->fetch_assoc();
        return $user;
    }
public function getNew(){
		$query = "SELECT * FROM posts ORDER BY `posts_created_at` DESC";
	
		$result = $this->conn->query($query);

		$data = array();
		

		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}

		return $data;
	}

}



  ?>