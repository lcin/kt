<?php
	namespace Home\Controller;
	use Think\Controller;
	class InfoController extends Controller{
		
		
		public function index(){
			
			
			$info = M('info');
			//网站配置
			$config = M("config");
			$configs = $config -> find();
			
			
			$data = $info  -> select();
			foreach($data as &$d){
				$d['time'] = date("Y-m-d",$d['time']);
			}
			$this -> assign("configs",$configs);
			$this -> assign('infos',$data);
			
			$this -> display();
		}
		
	}
?>