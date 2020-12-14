<?php
	namespace Admin\Controller;
	
	class GroupController extends PublicController{

	   
	   //遍历管理组
		public function index(){
			
			
		
			$group = M('auth_group');
			$rule = M('auth_rule');
			if($_GET){
				$map1['title'] = array("LIKE","%{$_GET['title']}%");
			}else{
				$map1 = "";
			}
			$count = $group -> where($map1) -> count();
			$Page = new \Think\Page($count,5,$_GET);
			$show = $Page -> show();
			
			 $groups = $group ->where($map1)->order("id DESC") -> limit($Page ->firstRow.',',$Page -> listRows) -> select();
			  foreach($groups as &$g){
				$map['id'] = array('IN',$g['rules']);
				$rules = $rule -> where($map) -> select();
				$g['rules'] = $rules;
			  }
			  //dump($groups);
			 $this -> assign('groups',$groups);
			 $this -> assign('page',$show);
			$this -> display();
		}   
		
		//添加管理组
		public function add(){
			
			$rule = M('auth_rule');
			$group = M('auth_group');
			if($_POST['sub']){
			    $_POST['rules'] = implode(',',$_POST['rules']);
				if($group -> create()){
					if($group ->add()){
						$this -> redirect('Group/index');
					}else{
						$this -> error('添加失败');
					}
				}else{
					$this -> error('添加失败');
				}
			
			}
			
			$data = $rule -> where("status = 1") ->select();
			$this -> assign('rules',$data);
			$this->display();
		}
		
		//修改规则
		
		public function mod(){
			$rule = M('auth_rule');
			$group = M('auth_group');
			if($_POST['sub']){
				
				$_POST['rules'] = implode(',',$_POST['rules']);
				//dump($_POST);
				//exit;
				if($group -> create()){
					
					if($group -> save()){
						$this -> redirect("Group/index");
					}else{
						$this -> error("修改失败");
					}
				}else{
					$this -> error("修改失败");
				}
				
			}
			//把默认值带过去
			$id = $_GET['id'];
			$groups = $group -> find($id);
			  
			$rules = $rule -> where("status = 1") ->select(); //查找出全部的规则 并且状态是开启的
			$this -> assign('rules',$rules);    
			$this -> assign('group',$groups);
			$this -> display();
		
		}
		
		//删除规则
		
		public function del(){
		
			$id  = I('id');
			$group = M('auth_group');
			$map['id'] = array("IN",$id);
			if($group -> where($map) -> delete($id)){
				
				$this -> redirect("Group/index");
				
			}else{
				$this -> error("删除失败");
			}
			
		}
		
		//修改状态
		public function status(){
			
		    $group = M('auth_group');
			$id = $_GET['id'];
			$status = $_GET['status'];
			$map['id'] = $id;
			if($status){
				$map['status'] = 0;
				$group -> save($map);
				$this -> redirect("Group/index");
			}else{
				$map['status'] = 1;
				$group -> save($map);
				$this -> redirect("Group/index");
			}
		
		}
		
	}
?>