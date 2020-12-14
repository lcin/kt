<?php
	namespace Home\Controller;
	use Think\Controller;
	class TalkController extends Controller{
		public function index(){
			
			//查找视频 ，讲师 ，
			
			$vid = $_GET['id'];

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