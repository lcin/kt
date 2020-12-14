<?php
namespace Admin\Controller;
//use Think\Controller;

class OrganController extends PublicController {
    
	/**
	*	select() 遍历合作机构
	*
	*/
	public function index(){
      
		$organ = M("organ");  
		$map['name'] = array("LIKE","%{$_GET['name']}%");
		$count = $organ -> where($map)-> count();
		$Page = new \Think\Page($count,5,$_GET);
		$show  = $Page  ->show();
		$data = $organ -> field("id,url,name,description") -> where($map) -> order("id DESC") -> limit($Page->firstRow.','.$Page -> listRows) -> select();
		 // dump($data);
		 // exit;
		$num = ($Page -> nowPage -1)*($Page -> listRows) +1;
		$this -> assign("num",$num);
		
		$this ->assign("page",$show);
		$this -> assign("organs",$data);
		$this -> display(); 
	}
	
	/**
	*	add()添加合作机构
	*
	*/
	public function add(){
		
		
		$organ = M('organ');
		if($_POST['sub']){
			if($organ -> create()){
				if($organ -> add()){
					$this -> redirect("Organ/index");
				}else{
					$this -> error("添加合作机构失败");
				}
			}
		}
		$this -> display();
	}
	
	/**
	*	mod() 修改合作机构
	*
	*/
	public function mod(){
		
		$organ = M("organ");
		//dump($_POST);
		if($_POST['sub']){

			if($organ -> create()){
				if($organ -> save()){
					$this -> redirect("Organ/index");
				}else{
					$this -> error('修改失败'); 
				}
			}
		}
		$id = $_GET['id'];
		$data = $organ -> find($id);
		$this -> assign('organ',$data);
		$this -> display();
	}
	
	public function del(){
		$id = $_GET['id'];
		$organ = M("organ");
		$map['id'] = array("IN",$id);
		if($organ -> where($map)-> delete($id)){
			$this -> redirect("Organ/index");
		}else{
			$this -> error("删除失败");
		}
	}
}


	