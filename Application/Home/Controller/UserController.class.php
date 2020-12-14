<?php
	namespace Home\Controller;
	use Think\Controller;
	class UserController extends Controller{
		public function register(){
			$this -> display();
		}

		public function advice(){
			$advice = M("advice");
			$user = M("user");

			
			if($_POST['sub']){
				if( !$_POST['uid']){
					$this ->redirect("Login/index");
				}
				if($advice->create()){
					$_POST['time'] = time();
					unset($_POST['sub']);
					if($advice -> add($_POST)){
						$this ->redirect("Index/index");
					}else{
						$this->error("提交失败");
					}
				}else{
					$this->error("提交失败");
				}
			}
			if($_GET){
				$data=$user->where($_GET)->field('email')->find();
				$this->assign("data",$data);
			}


			$this -> display();
		}
		
		public function download(){
			$config = M("config");
			if($_GET['filename']){
				$app=M("app");
				$_GET['time']=time();
				$_GET['addr']=$_SERVER['SERVER_ADDR'];
				if(!$_GET['uid']){
					$_GET['uid']="unknow";
				}
				if($_GET['filename']=="安卓版"){
					if($app->create($_GET)){
						if($app->add()){
							echo "success";
						}else{
							echo "false";
						}
					}else{
						echo "false";
					}
				}
				if($_GET['filename']=="iPad版"){
					if($app->create($_GET)){
						if($app->add()){
							echo "success";
						}else{
							echo "false";
						}
					}else{
						echo "false";
					}
				}
				if($_GET['filename']=="iPhone版"){
					if($app->create($_GET)){
						if($app->add()){
							echo "success";
						}else{
							echo "false";
						}
					}else{
						echo "false";
					}
				}
				exit;
			}
			$configs = $config -> find();
			$this -> assign("configs",$configs);
			$this->display();
		}
	}
?>