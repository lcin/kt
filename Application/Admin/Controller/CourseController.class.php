<?php
	namespace Admin\Controller;
	//use Think\Controller;
	
	class CourseController extends PublicController{
		
		
			/**
			*	目录类型显示
			*/
		public function index(){
		
			$video = M("video");
			$course = M('course');
			$map['name'] = array("LIKE","%{$_GET['name']}%");
			$count = $course -> where($map) -> count();
			$Page = new\Think\Page($count,5,$_GET);
			$show = $Page -> show();
			$courses = $course -> field("id,vid,name,time,url") -> where($map) ->  order("id DESC") -> limit($Page->firstRow.','.$Page -> listRows) -> select();
			
			$num = ($Page -> nowPage -1)*($Page -> listRows)+1;
			
			foreach($courses as &$d){
				$data = $video -> field('title') -> find($d['vid']);
				$d['title'] = $data['title'];
				$d['time'] = date("H:i",$d['time']);
			}
			
			$url = U("Play/index");
			//dump($courses);
			$this -> assign("num",$num);
			$this -> assign("page",$show);
			//$this -> assign("time",$times);
			$this -> assign("url",$url);
			$this -> assign('courses',$courses);
			$this -> display();
		}
		    
		
		
		
      
		/**
	*	del() 删除视频
	*
	*/
	public function del(){
		$id = I('id');
		
		//dump($id);
		$course = M("course");
		$map['id'] = array('in',$id);
		
		if($course -> where($map) -> delete($id)){
			
			$this -> redirect("Course/index");
		}else{
			
			$this -> error("删除失败");
		}
	}
		
		//添加目录
		public function add(){
			
			
			
			$video = M('video');
			
			$course = M('course');
			
			
			if($_POST['sub']){
				
				   // dump($_POST);
			 // exit;
				if($course ->create()){
					
					if($course -> add()){
						$this -> redirect("Course/index");
					}else{
						$this -> error('添加失败');
					}
				}
				
			}
			
			$data = $video ->select();
			//$dump($data);
			$this->assign('videos',$data);
			
			
			$this -> display();
			
		}
		
		
		
		
		//修改目录
		public function mod(){
			
			$course = M('course');
			
			if($_POST['sub']){
				if($course -> create()){
					if($course -> save()){
						$this -> redirect('Course/index');
					}else{
						$this -> error('修改失败');
					}
				}
			}
			
			
			$id = $_GET['id'];
			$data = $course -> find($id);
			// dump($data);
			// exit;
			//dump($data);
			$this -> assign('course',$data);
			$this -> display();
			
		}

		
	
	}
?>