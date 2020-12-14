<?php
namespace Admin\Controller;
use Think\Controller;

class AdvController extends PublicController {
    
	/**
	*	select() 遍历广告
	*
	*/
	public function index(){
		$adv = M("adv");
		$map['des'] = array("LIKE","%{$_GET['des']}%");
		$count = $adv ->where($map) -> count();
		$Page = new\Think\Page($count,5,$_GET);
		$show =$Page ->show();
		$data = $adv -> where($map) ->order("id DESC") -> limit($Page -> firstRow.','.$Page -> listRows) -> select();
		
		$num = ($Page -> nowPage -1)*($Page ->listRows) +1;
		$this -> assign("num",$num);
		$this -> assign("page",$show);
		$url = U($data['url']);
		// dump($url);
		// exit;
		$this -> assign("advs",$data);
		$this -> assign("url",$url);
		$this -> display();

		
	}

	
	/**
	*	mod() 修改广告
	*
	*/
	public function mod(){
		
		$adv = M("adv");
		
		if($_POST['sub']){
		$_POST['pic'] = $this -> upload();
			if($adv -> create()){
				if($adv -> save()){
					$this -> redirect("adv/index");
				}else{
					$this -> error("广告修改失败");
				}
			}
		}
		$id = $_GET['id'];
		
		$data = $adv ->find($id);
		$this -> assign("adv",$data);
		$this -> display();
	}
	
	/**
	*	del() 删除广告
	*
	*/
	public function del(){
		$id = I("id");
		$adv = M("adv");
		// dump($id);
		// exit;
		$map['id'] = array("IN",$id);

		if($adv -> where($map) -> delete($id)){
			$this -> redirect("adv/index");
		}else{
			$this -> error("广告删除失败");
		}		
	}
	
	/**
	*	del() 添加广告
	*
	*/
	public function add(){
		
		$adv = M("adv");
		if($_POST['sub']){
			$_POST['pic'] = $this -> upload();
			if($adv -> create()){
				if($adv -> add()){
					$this -> redirect("adv/index");
				}else{
					$this -> error("添加广告失败");
				}
			}
		}
		$this -> display();
	}
	
	//广告图片的上传
	private function upload(){
		$adv = array("maxSize" => 100000000,
						"exts" 	  => array("jpg","jpeg","png","gif"),
						"rootPath" =>"./Public/Upload/"
						);
		$upload = new \Think\Upload($adv);
		$info = $upload -> uploadOne($_FILES['pic']);
		if($info){
			$filePath = $info['savepath'].$info['savename'];
			return  $filePath;
			// exit;
		}else{
			$this -> error($upload -> getError());
		}
	}
}	


