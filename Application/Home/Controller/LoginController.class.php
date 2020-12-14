<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function index(){
		$this->display();
    }
	public function reg(){
		$this->display();
	}
	public function reg1(){
		if($_GET['number']){
				$user=M("user");
				$email['email']=$_GET['number'];
				if($user->where($email)->select()){
					echo "s";
				}else{
					echo "";
				}
		}
	}
	public function add(){

		if($_POST['number']){
			$user=M("user");
			//验证码验证
			if(!$this ->check($_POST['code']))
			{
				$this -> error("验证码不正确");
			}
            $_POST['email']=$_POST['number'];
            $_POST['number']=$_POST['number'];
			$_POST['pwd']=md5($_POST['pwd']);
			if($user->create()){		
				if($user->add()){
					$this->redirect("Login/index");
				}else{
					$this->error("添加用户失败");
				}
				exit;
			}
		}
	}
	public function login(){
		//dump($_POST);
		$user=M("user");
		$d['email']=$_POST['username'];
		$d['pwd']=md5($_POST['password']);
		if($user->where($d)->select()){
			echo "qqq";
			$this->redirect("Index/index");
		}else{
				$this->error("用户名或密码错误");
		}
		exit;
	}
	
	public function verify(){
		$config = array(
			"fontSize" => 30,
		);
		$verify = new \Think\Verify($config);
		$verify -> entry();
	}
	
	private function check($code){
		$verify = new \Think\Verify();
		return $verify -> check($code);
	}
	public function loginout(){
		$config = M("config");
		$configs = $config -> find();
		$this -> assign("configs",$configs);
		$this -> display();
	}
	
}












