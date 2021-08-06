<?php



define('URL', 'publics/');
define('URL_TENPLATE_CLIENT', 'publics/client/');
define('URL_TENPLATE_ADMIN', 'publics/admin/');
define('URL_TENPLATE_AUTH', 'publics/auth/');
session_start();
class App{
	private $mod = 'client';
	private $act = 'home';
	private $c = 'home';
	private $params = [];
	public function __construct(){
		if (isset($_GET['mod'])) {
			$this->mod  = $_GET['mod'];
		}
		if (isset($_GET['act'])) {
			$this->act  = $_GET['act'];
		}
		if (isset($_GET['c'])) {
			$this->c  = $_GET['c'];
		}
		if(isset($_GET['slug']))
                $this->c = $_GET['slug'];

             if(isset($_GET['key']))
                $this->c = $_GET['key'];

		 	$this->params['posts_slug']   = isset($_GET['slug']) ? $_GET['slug']:[];
            $this->params['posts_id']     = isset($_GET['id']) ? $_GET['id']:[];
            $data[]                 = $_POST;
            $data[]                 = $_FILES;
            $this->params['data']   = $data;


		

	}
	public function  action(){
			$class = ucfirst($this->c).ucfirst($this->mod)."Controller";
			$path ="controllers/".$this->mod."/$class.php";
			if (!file_exists($path)) {
				return false;
			}
			require_once $path;
			$controler_obj = new $class();

call_user_func_array([$controler_obj,$this->act], $this->params);
	}
}
$app = new App();
$app->action();



  ?>