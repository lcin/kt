<?php
	namespace Admin\Controller;
	use Think\Controller;
	
	class TypeController extends Controller{
		
		
			/**
			*	视频类型显示
			*/
		public function index(){
			
			
			$type = M('type');
			$types = $type -> field("*,concat(path,'-',id) tpath") -> order("tpath") ->select();
			//$data = $type -> select();
			//dump($data);\
			//
		     foreach($types as &$t){
				
				if($t['pid'] == 0){
					
					$data1 = $type -> field("path,pid") -> where("pid = '{$t['id']}'&& path = '0-{$t['id']}'") -> select(); 
					//dump($data1);
					if(!$data1){
						$t['son'] = "0";
					}
				
				}else{
					  $video = M('video');
					  $data2 = $video -> field("tid")-> where("tid = {$t['id']}") -> select();
					  if(!$data2){
						 $t['video'] = "0";
					  }
				}
			 }
			//dump($types);
			$this -> assign("types",$types);
			$this -> display();
		}
		    
			//添加分区
		public function add_parent(){
			
			$type = M('type');
			
			
			
			if($_POST['sub']){
			    
				if($type -> create()){
					if($type -> add()){
						
						$this -> redirect("Type/index");
					}else{
						
						$this -> error('添加失败');
					}
				}
			}
			$this -> display();
		}
		
			//添加子模块
		public function add_son(){
			
			$type = M('type');
			
			if($_POST['sub']){
			   
				$pid = $_POST['pid'];
				
				$_POST['path'] = "0-{$pid}"; 
				 
				if($type -> create()){
					if($type -> add()){
						
						$this -> redirect("Type/index");
					}else{
						
						$this -> error('添加失败');
					}
				}
			}
			$this -> display();
		}
		
		
		public function select(){
			
			
			//查看类型详情
			
			$video = M('video');
			$teacher = M('teacher');
			//搜索视频
			if($_GET['sub']){
				$map['title'] = array("like","%{$_GET['title']}%");
			}
			$tid = $_GET['id'];
			$map['tid'] = $tid;
		     
			$videos = $video -> where($map) -> select(); //查出这个子版块里面的视频
			
			foreach($videos as &$v){
				$data = $teacher -> field('tname') -> find($v['nid']);
				$v['tname'] = $data['tname'];
			}
			$this -> assign('videos',$videos);
			$this -> assign('id',$tid);
			$this -> display();
		}
		
		/**
	*	del() 删除视频
	*
	*/
	public function del_video(){
		$id = $_GET['id'];
		
		//dump($id);
		$video = M("video");
		//$map['id'] = array('in',$id);
		
		if($video-> delete($id)){
			
			$this -> redirect("Video/index");
		}else{
			
			$this -> error("删除失败");
		}
	}





		//添加视频
		public function add_video(){
			$video = M('video');
			$type = M('type');
			$teacher = M('teacher');
			
			
			if($_POST['sub']){
				$data['id']=$_POST['tid'];
				$d=$type->where($data)->field("pid")->find();
				$_POST['pid']=$d['pid'];
			
				if($_POST['replace']){
					$_POST['tid']=$_POST['replace'];
				}
				if($_POST['replace']){
					$_PSOT['tid'] = $_POST['replace'];
 				}
				$_POST['video'] = $this -> upload();
				if($video ->create()){
					
					if($video -> add()){
						$this -> redirect("Video/index");
					}else{
						$this -> error('添加失败');
					}
				}
			}
			$data = $teacher ->select();
			$map['pid'] = array("gt",0);
			$types = $type -> where($map) ->select();
			$this->assign('types',$types);
			$this->assign('datas',$data);
			
			$this -> display();
		}




		
		//删除类型
		public function del(){
			$id = I('id');
			$type = M('type');
			$map['id'] = array('in',$id);
			if($type -> where($map) -> delete($id)){
				
				$this -> redirect('Type/index');
			}else{
				$this -> error('删除失败');
			}
			$this -> display();
		}
		


		//修改分区
		public function mod_parent(){
			
			$type = M('type');
			
			if($_POST['sub']){
				if($type -> create()){
					if($type -> save()){
						$this -> redirect('Type/index');
					}else{
						$this -> error('添加失败');
					}
				}
			}
			
			
			$id = $_GET['id'];
			$data = $type -> find($id);
			$this -> assign('type',$data);
			$this -> display();
			
		}
		
		//修改子模块
		public function mod_son(){
			
			$type = M('type');
			
			if($_POST['sub']){
				if($type -> create()){
					if($type -> save()){
						$this -> redirect('Type/index');
					}else{
						$this -> error('添加失败');
					}
				}
			}
			
			
			$id = $_GET['id'];
			$data = $type -> find($id);
			$this -> assign('type_son',$data);
			$this -> display();
			
		}
		
		
		//文件上传
	private function upload(){
		//dump($_FILES);
	
		$config = array("maxSize" => 1000000,
						"exts" 	  => array("jpg","jpeg","png","gif"),
						"rootPath" =>"./Public/Upload/"
						);
		$upload = new \Think\Upload($config);
		$info = $upload -> uploadOne($_FILES['video']);
		
		if($info){
			
			$filePath = $info['savepath'].$info['savename'];
			return $filePath;
		}else{
			$this -> error($upload -> getError());
		}
	}
	}
?>