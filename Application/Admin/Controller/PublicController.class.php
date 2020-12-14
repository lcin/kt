<?php
	nameSpace Admin\Controller;
	use Think\Controller;
	
	class PublicController extends Controller{
		   function _initialize(){
			 if(!$_SESSION['islogin']){
				 $this -> error('请先登录',U('Login/login'));
			  }
			  $uid = $_SESSION['admin']['id'];
			  if($uid == 1){
				  return true;
				}
				//后台权限判断
				 $rule = CONTROLLER_NAME .'/'.ACTION_NAME;
				 $Auth = new \Think\Auth();
				 if(!$Auth -> check($rule,$uid)){
					 $this -> error("你没有权限");
				 }
		   }
	}
?>