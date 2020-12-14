<?php
namespace Admin\Controller;
//use Think\Controller;

class DownloadController extends PublicController {
    
	/**
	*	select() 遍历下载信息
	*
	*/
	public function index(){
		
		$app = M("app");
		$count = $app-> count();
		$Page = new \Think\Page($count,3);
		$show  = $Page  ->show();
		$apps = $app -> field("id,uid,time,filename,addr") -> order("id DESC") -> limit($Page->firstRow.','.$Page -> listRows) -> select();;
		$num = ($Page -> nowPage -1)*($Page ->listRows) +1;
		
		foreach($apps as &$a){
			if($a['uid'] != "unknow"){
				$user = M("user");
				$map['id'] = $a['uid'];
				$d=$user -> where($map) -> field("email") -> find();
				$a['uid'] = $d["email"];
			}
			$a['time'] = date("Y-m-d H:i:s",$a['time']);
		}
		
		$this -> assign("num",$num);
		$this->assign("apps",$apps);
		$this->assign("page",$show);
		$this->display();
	}
}


