<?php
	namespace Home\Controller;
	use Think\Controller;
	class NoteController extends Controller{
		public function index(){
			
			//查找视频 ，讲师 ，
			
			$cid = $_GET['id'];
			
			$course = M('course');
			
			
			
			$this -> display();
			
			
		}
		
		public function num(){
		    	$video = M('video');
				if($video -> create()){
					 if($video -> save()){
					    
					 }else{
						$this -> error("修改失败");
					 }  
				}	
		}
		
		
	}
?>