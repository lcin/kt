<?php
namespace Admin\Controller;
//use Think\Controller;
class ConfigController extends PublicController{

		//查询
		public function index(){
			$config = M("config");
			$data = $config -> field("id,title,keywords,description,copyright,logo,status") -> find();
			
			$this -> assign("configs",$data);
			$this -> display();
		}

		//修改权限
		public function status(){
			
			$user = M("config");
			$id = $_GET['id'];
			$status = $_GET['status'];
			$map['id'] = $id;
			if($status){
				$data['status'] = '0';
				$user -> where($map) -> save($data);
				$this -> redirect("Config/index");
			}else{
				$data['status'] = '1';
				$user -> where($map) -> save($data);
				$this -> redirect("Config/index");
			}
			
		}
		
	//修改网站配置
	public function mod(){
		
		$config = M("config");
		
		if($_POST['sub']){
			//dump($_POST);
			
			$_POST['logo'] = $this -> upload();
			if($config -> create()){
			
				if($config -> save()){
					
					$this -> redirect("Config/index");
				}else{
					
					$this -> error('修改失败'); 
				}
			}
		}
	    $id = $_GET['id'];
        $data = $config -> find($id);		
		$this -> assign('configs',$data);
		$this -> display();
	}
	
	
	//网站配置文件上传
	private function upload(){
		//dump($_FILES);
	
		$config = array("maxSize" => 1000000,
						"exts" 	  => array("jpg","jpeg","png","gif"),
						"rootPath" =>"./Public/Upload/"
						);
		$upload = new \Think\Upload($config);
		$info = $upload -> uploadOne($_FILES['logo']);
		
		if($info){
			$filePath = $info['savepath'].$info['savename'];
			return  $filePath;
			// exit;
		}else{
			$this -> error($upload -> getError());
		}
	}
}	
?>