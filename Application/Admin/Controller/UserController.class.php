<?php
	nameSpace Admin\Controller;
	//use Think\Controller;
	
	class UserController extends PublicController{
		   
		 // //搜索用户
		// public function select(){
			
			// $user = M("user");
			// $email = I("email");
			// $map['email'] = array("LIKE",'%'.$email.'%');
			// $data = $user -> where($map) ->select();
			// $this -> assign("users",$data);
			// $this -> display('index'); 
		
		// }
		 //遍历用户
		public function index(){
			
			$user = M("user");
			$map['email'] = array("LIKE","%{$_GET['email']}%");
			$count = $user -> where($map) -> count();
			$Page = new \Think\Page($count,4,$_GET);
			$show = $Page -> show();
			$data = $user ->field("id,email,status,pwd") ->where($map)->order("id DESC") -> limit($Page ->firstRow.','.$Page -> listRows) -> select();
			
			$num = ($Page -> nowPage -1)*($Page ->listRows) +1;
			$this -> assign("num",$num);
			$this -> assign("page",$show);
			$this-> assign("users",$data);
			$this -> display();
			
		}
		  //修改用户
		public function mod(){
			$user = M('user');
			if($_POST['sub']){
				if($_POST['pwd']){
					$_POST['pwd'] = md5($_POST['pwd']);
				}else{
					unset($_POST['pwd']);
				}
				
				if($user -> create()){
					if($user->save()){
						$this -> redirect('User/index');
					}else{
						$this -> error('修改用户失败');
					}
				}
			}
			$id = $_GET['id'];
			$data = $user -> find($id);
			$this -> assign("user",$data);
			$this -> display();
		}
		
		//删除用户
		public function del(){
			$id = I('id');
			//dump($id);
			$user = M('user');
			$map['id'] = array('IN',$id);
			if($user -> where($map) -> delete($id)){
				$this -> redirect('User/index');
			}else{
				$this -> error('删除用户失败！');
			}
			
			
		}
		
		public function add(){
			
			//dump($_POST);
			//exit;
			  $user = M('user');
			 
			  
			if($_POST['sub']){
				
				$_POST['pwd'] = md5($_POST['pwd']);
				
					if($user -> create()){
					
					if($user -> add()){
						$this -> redirect('User/index');
					}else{
						$this -> error('添加用户失败！');
					}
				}
				exit;
			}
			$this -> display();
		}
		
		//修改权限
		public function status(){
			
			$user = M("user");
			$id = $_GET['id'];
			$status = $_GET['status'];
			$map['id'] = $id;
			if($status){
				$data['status'] = '0';
				$user -> where($map) -> save($data);
				$this -> redirect("User/index");
			}else{
				$data['status'] = '1';
				$user -> where($map) -> save($data);
				$this -> redirect("User/index");
			}
			
		}		
		
		//查询用户详情
		
		public function select(){
			$id = $_GET['id'];
			//echo $id;
			$detail = M('userdetail'); 
			$data = $detail -> where("id={$id}") -> find();
			//dump($data);
			$this -> assign("d",$data);
			
			$this -> display();
		}
	}
?>