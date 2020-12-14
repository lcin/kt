<?php
	namespace Home\Controller;
	use Think\Controller;
	header("content-type:text/html;charset=utf-8");
	class TypeController extends Controller{
		public function index(){
			$type = M("type");
			$video = M("video");
			$teacher = M("teacher");
			
			//网站配置
			$config = M("config");
			$configs = $config -> find();
			
			//type广告
			$adv = M("adv");
			$advs = $adv -> select();
			// dump($advs);
			// exit;
		

				$count = $video -> count();
				$Page = new \Think\Page($count,8);
				$show = $Page -> show();
				$typeData = $video -> where("pid={$_GET['id']}") ->order("id DESC") -> limit($Page ->firstRow.','.$Page -> listRows) -> select();
                foreach($typeData as &$types){
                    $typeTeacher['id'] = $types['nid'];
                    $typeTeachers= $teacher -> where($typeTeacher) -> find();
                    $types['teacher']=$typeTeachers['tname'];
                }

			
			//遍历主栏目
			$data = $type -> where("pid=0") -> select();
			$this ->assign("configs",$configs);
			$this ->assign("advs",$advs);
			$this ->assign("page",$show);
			$this ->assign("types",$data);
			$this->assign("typeData",$typeData);
			$this -> display();
			
		}
		
			//遍历子栏目
		public function type(){
			$type = M('type');
			$id  =  $_POST['id'];
			$map['pid'] = $id;
			//$map['path'] = "0-{$id}";
			$data = $type -> where($map) -> select();
			echo json_encode($data);
		}

		//遍历子栏目里面的视频
		public function video(){
			$id = $_POST['id'];
			$model = M();

			$data = $model ->table("study_video v,study_teacher t") -> field("v.*,t.tname") ->where("v.tid={$id} and v.nid =t.id") -> select();
			echo json_encode($data);
		}
	}	
?>