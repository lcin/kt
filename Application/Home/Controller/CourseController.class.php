<?php
	namespace Home\Controller;
	use Think\Controller;
	class CourseController extends Controller{
		public function index(){
			//查找视频 ，讲师 ，
			$vid = $_GET['id'];
			$teacher = M('teacher');
			$course = M('course');
			$video = M('video');
			
			//网站配置
			$config = M("config");
			$configs = $config -> find();
			
			$videos = $video -> find($vid);
			// dump($videos);
			$teachers = $teacher -> find($videos['nid']);
			//dump($teachers);
			
			//目录详情
			$courses = $course -> where("vid = {$vid}") -> select();
			foreach($courses as &$c){
				$c['time'] = date("H:s",$c['time']);
			}

			//dump($courses);
		 // dump($courses);
			$this -> assign("configs",$configs);
			$this -> assign('video',$videos);
			//$this -> assign('time',$times);
			$this -> assign('courses',$courses);
			
			$this -> assign('teacher',$teachers);
			$this -> display();
			
			
		}
		
		public function num(){
		    	if(!$_SESSION['id']){
					$this -> redirect('Login/index');
				}
				$video = M('video');
				if($video -> create()){
					 if($video -> save()){
					    
					 }else{
						$this -> error("修改失败");
					 }  
				}	
		}
		
		//网站配置
		public function course_note(){
			$config = M("config");
			$configs = $config -> find();
			$this -> assign("configs",$configs);
			$this -> display();
		}
		public function course_replay(){
			$config = M("config");
			$configs = $config -> find();
			$this -> assign("configs",$configs);
			$this -> display();
		}
		public function course_talk(){
			$config = M("config");
			$configs = $config -> find();
			$this -> assign("configs",$configs);
			$this -> display();
		}


        //报名加入课程
        public function joincourse()
        {
            //添加数据加入活动
            $join = M('videojoin');
            //获取activity数据
            $activity = M('video');
            $ids = I("videoid");
            $maps['videoid'] = array($ids);


            $vname = $join->where("vid = {$ids}")->select();
            if ($vname == null) {
                $datas = $activity->where($maps)->select($ids);
                $this->assign("datas", $datas);

                if ($_POST['sub']) {
                    if (!$_POST['uid']) {
                        $this->redirect("Login/index");
                    }
                    if ($join->create()) {
                        //获取时间数据传给表单一起提交
                        $_POST['jointime'] = time();
                        unset($_POST['sub']);
                        if ($join->add($_POST)) {
                            $this->redirect("index/index");
                        } else {
                            $this->error("提交失败");
                        }
                    } else {
                        $this->error("提交失败");
                    }
                }
                $this->display();
            }else{
                $this->error("您已经加入该课程了！");
            }
        }

        //活动包personalcenter
        public function kechengbao(){

            $join =M('videojoin');
            $teacher=M('teacher');
            $id=I("id");

            $count=$join->count();
            $Page=new\Think\Page($count,5);
            //根据获取的count值按5个5个的分页
            $show = $Page ->show();
            //组装分页链接
            $data = $join->where("uid = $id")->limit($Page->firstRow.','.$Page->listRows)-> select();
            foreach ($data as &$d){

                $names=$teacher->field("tname")->find($d['nid']);
                $d['tname']=$names['tname'];
                $d['jointime']=date("Y-m-d H:i:s",$d['jointime']);
                //格式
            }

            $this -> assign("page",$show);
            $this ->assign("datas",$data);
            $this -> display();
        }


        //在课程包中查看加入的课程详情
        public function kechengdetail(){
            $vid = $_GET['id'];
            $teacher = M('teacher');
            $course = M('course');
            $video = M('video');

            //网站配置
            $config = M("config");
            $configs = $config -> find();

            $videos = $video -> find($vid);
            // dump($videos);
            $teachers = $teacher -> find($videos['nid']);
            //dump($teachers);

            //目录详情
            $courses = $course -> where("vid = {$vid}") -> select();
            foreach($courses as &$c){
                $c['time'] = date("H:s",$c['time']);
            }

            //dump($courses);
            // dump($courses);
            $this -> assign("configs",$configs);
            $this -> assign('video',$videos);
            //$this -> assign('time',$times);
            $this -> assign('courses',$courses);

            $this -> assign('teacher',$teachers);
            $this -> display();
        }

        public function deljoin(){
            $join=M("videojoin");
            $id=I("joinid");
            $map['joinid']=array($id);

            if($join->where($map)->delete($id)){
                $this->redirect("index/index");
            }else{
                $this->error('删除失败');
            }
        }

	}
?>