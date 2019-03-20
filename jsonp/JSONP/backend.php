<?php
$url = $_SERVER['REQUEST_URI'];
$path = explode('/', trim($url, '/'));//分割路由

require_once($path[2].'.php');

$method = explode('?', $path[3]);

$r =  new $path[2]($_GET,$_POST);
$r->$method[0]();


class User
{	
	private $user;
	private $id;
	public function __construct($user,$id)
	{

		$this->user = $user;
		$this->id = $id;
	}
	public function user(){
		return $this->user;
	}
	public function id(){
		return $this->id;
	}

}

$lap = new User("lap",123);

class Backend{
	private $_GET;
	private $_POST;
	public function __construct($get,$post)
	{
		$this->_GET = $get;
		$this->_POST = $post;
	}
	public function userInfo(){
		header('content-type:text/javascript;charset=utf-8');
		$name = $this->$_GET['cb'];
		$data = ['name'=>'tom','age'=>'23'];
	    echo  $name.'('.json_encode($data).')';

		// $res = [
		// 			"userInfo" => $this->_GET['cb'],
		// 			"id'" => $this->_GET['id'],
	 //                "msg" => "success",
	 //                "code" => 1
	 //            ];
	 //    echo json_encode($res);
	}
}
?>