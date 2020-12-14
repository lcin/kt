<?php
	namespace Admin\Controller;
	
	class AuthController extends PublicController{

	   
	   //遍历规则
		public function ruleIndex(){
			$auth_rule = M('auth_rule');
			if($_GET){
				$map['title'] = array("LIKE","%{$_GET['title']}%");
			}else{
				$map = "";
			}
			$count = $auth_rule -> where($map) -> count();
			$Page = new \Think\Page($count,8,$_GET);
			$show = $Page -> show();
			
			$data = $auth_rule -> where($map)->order("id DESC") -> limit($Page ->firstRow.',',$Page -> listRows) -> select();
			$num = ($Page -> nowPage - 1)*($Page -> listRows) +1;
			$this -> assign("num",$num);
			$this -> assign('rules',$data);
			$this -> assign('page',$show);
			$this -> display();
		}   
		
		//添加规则
		public function addRule(){
			//dump($_POST);
			$auth_rule = M("auth_rule");
			//exit;
			if($_POST['sub']){
				
				
				if($auth_rule->create()){	
					
					if($auth_rule ->add()){
						
						$this ->redirect("Auth/ruleIndex");	
					}else{
						$this -> error('添加失败');
					}				   
				}else{
					$this -> error("添加失败");
				}
				
			}
			$this->display();
		}
		
		//修改规则
		
		public function modRule(){
			$auth_rule = M('auth_rule');
			
			if($_POST['sub']){
				dump($_POST);
				if($auth_rule -> create()){
					
					if($auth_rule -> save()){
						$this -> redirect("Auth/ruleIndex");
					}else{
						$this -> error("修改失败");
					}
				}else{
					$this -> error("修改失败");
				}
				
			}
			//把默认值带过去
			$id = $_GET['id'];
			$data = $auth_rule -> find($id);
			$this -> assign('rule',$data);
			$this -> display();
		
		}
		
		//删除规则
		
		public function delRule(){
		
			$id  = I('id');
			$auth_rule = M('auth_rule');
			$map['id'] = array("IN",$id);
			if($auth_rule -> where($map) -> delete($id)){
				
				$this -> redirect("Auth/ruleIndex");
				
			}else{
				$this -> error("删除失败");
			}
			
		}
		
		//修改状态
		public function modStatus(){
			
		    $auth_rule = M('auth_rule');
			$id = $_GET['id'];
			$status = $_GET['status'];
			$map['id'] = $id;
			if($status){
				$map['status'] = 0;
				$auth_rule -> save($map);
				$this -> redirect("Auth/ruleIndex");
			}else{
				$map['status'] = 1;
				$auth_rule -> save($map);
				$this -> redirect("Auth/ruleIndex");
			}
		
		}
		
	}
?>