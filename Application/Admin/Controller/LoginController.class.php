<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    
	//用户的登陆
	 
	public function login(){

		$admin = M('admin');
	  
	  //判断用户是否登陆成功
	   //dump($_POST);
	   if($_POST['sub']){
		
		$map = $_POST;
		unset($map['sub']);
		$map['status'] = 1;
		$map['pwd'] = md5($_POST['pwd']);
		$data = $admin -> where($map) -> find();
		
	
	
		if($data){
		
		 $_SESSION['admin'] = $data;
		// dump($data);
		 $_SESSION['islogin'] = 1;
		 $this -> redirect('Index/index');
		
		}else{
			$this ->error("用户名或密码不正确");
		}
	   
		
		
		
	}
		$this->display(); 
	 
}
	// // 退出登录
	public function loginOut(){
		unset($_SESSION['admin']);
		unset($_SESSION['islogin']);
	$this -> redirect('Login/login');
	// }
  }	
	
}