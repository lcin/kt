<?php
namespace Admin\Controller;
//use Think\Controller;

class VideoController extends PublicController {
    
	/**
	*	select() 遍历视频
	*
	*/
	public function index(){
      
		
		$video = M("video");
		$map['title'] = array("LIKE","%{$_GET['title']}%");
		//$teacher = M('teacher');
		//$type = M('type');
		$count = $video -> where($map)->count();
		$Page = new\Think\Page($count,10,$_GET);
		$show = $Page -> show();
		$videos = $video -> field("id,tid,nid,pid,title,price,video,number") -> where($map) -> limit($Page ->firstRow.','.$Page -> listRows) -> select();
		
		$num = ($Page -> nowPage - 1) * ($Page -> listRows) + 1; 
		$this -> assign("num",$num);
				
		$this -> assign("page",$show);
		// foreach($videos as &$v){
			// $teachers = $teacher -> field("tname") -> find($v['nid']);
			// $types = $type -> field('name') -> find($v['tid']);
			// $v['name'] = $types['name'];
			// $v['tname'] = $teachers['tname'];
			
		// }　
		//dump($videos);
	  
		
		// $map['title'] = array("LIKE","%{$_GET['title']}%");
		// $count = $video -> where($map)->count();
		// $Page = New \Think\Page($count,3,$_GET);
		// $show = $Page -> show();
		
		// $data = $video -> field("id,title,video,price,number") -> where($map) ->order("id DESC") -> limit($Page->firstRow.','.$Page -> listRows)-> select(); 
		// $this ->assign("page",$show);
	    $this -> assign("videos",$videos);
		$this -> display(); 
		
	}
	/**
	*	des() 查看详细信息
	*    
	*/  
	
	
	
	
	/**
	*	mod() 修改视频
	*
	*/
	public function mod(){
		
		$video = M("video");
		
		if($_POST['sub']){
			//dump($_POST);
			
			$_POST['video'] = $this -> upload();
			if($video -> create()){
			
				if($video -> save()){
					
					$this -> redirect("video/index");
				}else{
					
					$this -> error('修改失败'); 
				}
			}
		}
	     $id = $_GET['id'];
        $data = $video -> find($id);		
		$this -> assign('video',$data);
		$this -> display();
	}
	
	/**
	*	del() 删除视频
	*
	*/
	public function del(){
		$id = I('id');
		//dump($id);
		$video = M("video");
		$map['id'] = array('in',$id);
		
		if($video -> where($map) -> delete($id)){
		
			$this -> redirect("video/index");
		}else{
			
			$this -> error("删除失败");
		}
	}
    public function deljoin(){
        $id = I('joinid');
        //dump($id);
        $video = M("videojoin");
        $map['id'] = array('in',$id);

        if($video -> where($map) -> delete($id)){

            $this -> redirect("video/videojoin");
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
		$info = $upload -> uploadOne($_FILES['video']);
		
		if($info){
			
			$filePath = $info['savepath'].$info['savename'];
			return $filePath;
		}else{
			$this -> error($upload -> getError());
		}
	}


	public function videojoin(){
        $data=M('videojoin');
        $datas=$data->select();

        foreach ($datas as &$d){
                $d['jointime']=date("Y-m-d H:i:s",$d['jointime']);
        }

        $this->assign('video',$datas);
        $this -> display();
    }
	
	
	
}


