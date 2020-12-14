<?php
	namespace Admin\Controller;
	//use Think\Controller;
class IndexController extends PublicController {
    
	//登录显示管理员图像 名字
	public function index(){
      
	  //视频观看次数
	  $app = M('app');
	  $video = M('video');
	  $num = $video ->field("number,title,price") -> order("number desc") -> limit("0,5") -> select(); 
	  //dump($num);
	  $data = $video -> field('sum(number) num') -> select();
	  //dump($data);
	  $video = $video ->count();
	  $this -> assign('videos',$num);
	  $this -> assign('video',$data);
	  $this -> assign('count',$video);
	  

	  
	  //视频下载次数
	  $count = $app ->count();
       $this -> assign('app',$count);
	  $this->display(); 
	}
}