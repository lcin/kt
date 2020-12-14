<?php
namespace Admin\Controller;
//use Think\Controller;

class teacherController extends PublicController {
    	
	/**
	*	select() 遍历讲师
	*
	*/
	public function index(){
      
		$teacher = M("teacher");  
		$map['tname'] = array("LIKE","%{$_GET['tname']}%");
		$count = $teacher -> where($map)-> count();
		$Page = new \Think\Page($count,4);
		$show = $Page ->show();
		$data = $teacher -> field("id,tname,photo,organ,description") -> where($map) -> order("id DESC") -> limit($Page -> firstRow.','.$Page -> listRows)   -> select();
		
		$num = ($Page -> nowPage -1)*($Page -> listRows) +1;
		$this -> assign("num",$num);
		$this -> assign("page",$show);
		$this -> assign("teachers",$data);
		$this -> display(); 
	}
	
	/**
	*	add()添加讲师
	*
	*/
	public function add(){
		$teacher = M('teacher');
		if($_POST['sub']){
			$_POST['photo'] = $this -> upload();
			if($teacher -> create()){
				if($teacher -> add()){
					$this -> redirect("teacher/index");
				}else{
					$this -> error("添加合作机构失败");
				}
			}
		}
		$this -> display();
	}
	
	/**
	*	mod() 修改讲师
	*
	*/
	public function mod(){
		
		$teacher = M("teacher");

		if($_POST['sub']){
		$_POST['photo'] = $this -> upload();
			if($teacher -> create()){
			
				if($teacher -> save()){
					
					$this -> redirect("teacher/index");
				}else{
					
					$this -> error('修改失败'); 
				}
			}
		}
		
		$id = $_GET['id'];
		$data = $teacher -> find($id);
		$this -> assign('teacher',$data);
		$this -> display();
	}
	
	/**
	*	del() 删除讲师
	*
	*/
	public function del(){
		$id = $_GET['id'];
		$teacher = M("teacher");
		$map['id'] = array("IN",$id);
		if($teacher -> where($map) -> delete($id)){
			
			$this -> redirect("teacher/index");
		}else{
			
			$this -> error("删除失败");
		}
	}
	
	//文件上传
	private function upload(){
		//dump($_FILES);
	
		$config = array("maxSize" => 1000000,
						"exts" 	  => array("jpg","jpeg","png","gif"),
						"rootPath" =>"./Public/Upload/"
						);
		$upload = new \Think\Upload($config);
		$info = $upload -> uploadOne($_FILES['photo']);
		
		if($info){
			
			$filePath = $info['savepath'].$info['savename'];
			return $filePath;
		}else{
			$this -> error($upload -> getError());
		}
	}
	
}


