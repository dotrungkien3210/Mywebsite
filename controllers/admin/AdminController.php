<?php

require_once 'controllers/BaseController.php';
class AdminController extends BaseController{
	function __construct(){
		/*if(isset($_SESSION['login'])){
			if ($_SESSION['login'] != true) {
				
				header("Location: index.php?mod=admin&act=login&c=auth");
			}}*/
	}
}

  ?>