<?php
	namespace Home\Controller;
	use Think\Controller;
	use Home\Controller\publicController;
	header("content-type:text/html;charset=utf-8");
	class IndexController extends publicController {
		public function index(){
		
		//网站配置
		$config = M('config');
		$configs = $config ->field("title,keywords,description,copyright,logo,status") ->find();
		
		// 判断session
		if($_SESSION){
			$this->assign("lo",$_SESSION);
		}else{
			$this->assign("lo",'');
		}
		//网站是否关闭
		if($configs['status'] == 0){
			$this->redirect("Index/shutdown");
		}

		//遍历栏目
		
		$type = M('type');
		$map1['path'] = array('like',array('%0-%'));		
		 $data = $type -> where("pid=0") -> limit('0,5') -> select();
		$this -> assign('types',$data);

		
		//讲师遍历
		$teacher = M('teacher');
		$data = $teacher ->limit("0,4") ->select() ;
		$this -> assign("teachers",$data);
		
		
		
		//遍历机构
		$organ = M('organ');
		$data = $organ -> select();
		$this -> assign('organs',$data);


		//遍历免费好课
		$video = M('video');
		$teacher = M('teacher');
		$map['price'] = 0;
		$videos = $video -> where($map) -> limit("0,4") -> select();
        foreach($videos as &$v){
			$data = $teacher -> field("tname") ->find($v['nid']);
			$v['tname']  = $data['tname'];
			
		}
		 //dump($videos);
		
		$this -> assign('videos',$videos);
			
		
		//遍历畅销好课
		$teacher = M('teacher');
		$video = M('video');
		$map['price'] = array('gt',0);
		$videos = $video -> where($map) ->limit("0,6") -> select();
		foreach($videos as &$v){
			$data = $teacher -> field('tname') -> find($v['nid']);
			$v['tname'] = $data['tname'];
		}
		$this -> assign("configs",$configs);
		$this -> assign('goods',$videos);
		
		//遍历广告
		$adv = M("adv");
		$advs = $adv ->field("pic,place") -> select();
		 // dump($advs);
		  
		$this -> assign("advs",$advs);
		
		
	//遍历新闻
	
		$news  = M("news");
		$data = $news -> limit("0,4") -> select();
		$this -> assign("news",$data);
		
		$this -> display();
	}

	//网站的关闭与开启
	public function shutdown(){
		$this -> display();
	}
	
	public function logout(){
		$_SESSION['username']=null;
		$_SESSION['id']=null;
		$this->redirect("Login/loginout");
		
	}
	public function login(){
		// 登录验证  默认开启session
		$user=M("user");
		$userdetail = M("userdetail");
		$d['email'] = $_POST['username'];
		$d1['pwd'] = md5($_POST['password']);
		
		$data = $user->where($d)->find();
		if($data['status'] && $d1['pwd'] == $data['pwd']){
			$data1 = $userdetail->field("username")->find($data['id']);
			if($data1['username']){
				$_SESSION['username']=$data1['username'];

                $data2 = $userdetail->field("realname")->find($data['id']);
                $_SESSION['realname']=$data2['realname'];

				$_SESSION['pic']=$data['pic'];
				$_SESSION['id']=$data['id'];
			}else{
				$_SESSION['username']=$data['email'];
				$_SESSION['pic']=$data['pic'];
				$_SESSION['id']=$data['id'];
			}
			$this->redirect("Index/index");
		}else{
			$this->error("用户名或密码错误");
		}
	}
	
	
	// 查找模板的子类
	public function se(){
		$type = M("type");
		$d['pid'] = $_POST['pid'];
		$data = $type -> where($d) -> select();
		//dump($data);
		echo json_encode($data);
	}
}