<?php
namespace Admin\Controller;
//use Think\Controller;

class InfoController extends PublicController {
    
	/**
	*	select() 遍历公告列表
	*
	*/
	public function index(){
      
		$info = M("info");
		$map['title'] = array("LIKE","%{$_GET['title']}%");
		
		$count = $info -> where($map) -> count();
		$Page = new \Think\Page($count,3);
		$show  = $Page  ->show();
		$infos = $info ->where($map) -> order("id DESC") -> limit($Page->firstRow.','.$Page -> listRows) -> select();
		 foreach($infos as &$i){		
			$i['time'] = date('Y-m-d H:i:s',$i['time']);
		 }
		 
		$num = ($Page -> nowPage -1)*($Page ->listRows) +1;
		$this -> assign("num",$num);
		 //dump($infos);
		
		$this ->assign("page",$show);
		
		$this -> assign("infos",$infos);
		$this -> display(); 
	}
	
	/**
	*	add()添加公告
	*
	*/
	public function add(){
		
		
		$info = M('info');
		$user = M('user');
		
		 if($_POST['sub']){
			
			$_POST['time'] =time();
			if($info -> create()){
			    // dump($_POST);
				// exit;
					if($info ->add()){
						$this -> redirect('Info/index');
					}else{
						$this -> error('添加失败');
					}
				}else{
					$this -> error('添加失败');
				}
			
		}
	
		$this -> display();
	}
	
	/**
	*	mod() 修改公告
	*
	*/
	
		
		public function mod(){
			
			$info = M('info');
			if($_POST['sub']){
				
				if($info -> create()){
					
					if($info -> save()){
						$this -> redirect("Info/index");
					}else{
						$this -> error("修改失败");
					}
				}else{
					$this -> error("修改失败");
				}
				
			}
			
			
			  
		
			  
			
			
			$id = $_GET['id'];
			$data = $info -> find($id);
			$this -> assign('info',$data);    
			$this -> display();
		
		}
	
	
	public function del(){
		$id = $_GET['id'];
		$info = M("info");
		$map['id'] = array("IN",$id);
		
		if($info -> where($map)-> delete($id)){
			
			$this -> redirect("Info/index");
		}else{
			
			$this -> error("删除失败");
		}
	}
}


	