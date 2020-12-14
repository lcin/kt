<?php
	namespace Admin\Controller;
	
	class AdminController extends PublicController{

	   
	   //遍历管理员
		public function index(){
			
			$admin = M('admin');//实例化admin数据表模型获取数据库中admin的数据
			
			$group = M('auth_group');
			$access = M('auth_group_access');
			
			//搜索分页
			 $map1['name'] = array("LIKE","%{$_GET['name']}%");//$_GET 变量用于收集来自 method="get" 的表单中的值。
            //"LIKE"模糊查询数组
			 $count = $admin -> where($map1) -> count();//在获取到的admin的数据中根据在搜索框中输入的名字的条件查询到count值也就是获取到数据的总条数
			 $Page = new \Think\Page($count,4,$_GET);
			 //New出一个page对象，设置自己想要的格式
            // 实例化分页类 传入总记录数和每页显示的记录数
            //传的值是分页每页要显示的条数
            $show = $Page -> show();//组装分页链接，分页显示输出
			$admins = $admin -> where($map1)->order("id DESC") -> limit($Page ->firstRow.',',$Page -> listRows) -> select();
			 //在admin数据中根据表单获取到map1数据条件查询数据，将按照id值倒序排序，$page->firstRow是列表起始行数，$page->listRows是列表每页显示行数

			 //查出管理组名字
			 foreach($admins as &$a){
				$group_access = $access ->field("group_id") ->where("uid='{$a['id']}'")-> find();
				//field要查询的字段名
				$a['group_id'] = $group_access['group_id'];
				$groups = $group -> field("title") -> where("id='{$a['group_id']}'") -> find();
				$a['title'] = $groups['title'];
			 }
            //foreach 循环用于遍历数组。每进行一次循环，当前数组元素的值就会被赋值给$a变量（数组指针会逐一地移动），在进行下一次循环时，您将看到数组中的下一个值。

			// dump($admins);
			  
			$this -> assign('admins',$admins);
			$this -> assign('page',$show);
			$this -> display();
			//$this->assign(); 把数组打出来。
            //$this->display('index.html');把打出来的数据放在index.html这个模板上
		}   
		
		//添加管理员组
		public function add(){
			$group = M('auth_group');//实例化autn_group数据模型
			$admin = M('admin');//实例化admin数据模型
			$group_access = M('auth_group_access');
			if($_POST['sub']){//如果获取到了提交的数据则...
			    // $_POST 变量用于收集来自 method="post" 的表单中的值。
			    $_POST['photo'] = $this -> upload();//
				$_POST['pwd'] = md5($_POST['pwd']);
			    if($admin -> create()){
					if($uid = $admin ->add()){
					     }else{
					      $this -> error('添加失败');
					    }
				 }
				 $_POST['uid'] = $uid; //把管理员ID赋值
					if($group_access -> create()){
						if($group_access ->add()){
							$this -> redirect('Admin/index');
						    }else{
							    $this -> error('添加失败');
						          }
				    }
			    }
			$data = $group -> where("status = 1") ->select();
			$this -> assign('groups',$data);
			$this->display();
		}




		//修改管理员
		public function mod(){
			$group = M('auth_group');
			$admin = M('admin');
			$access = M('auth_group_access');
			if($_POST['sub']){
				
				$_POST['photo'] = $this -> upload();
				  // dump($_POST);
				  // exit;
				if($admin -> create()){
					
					if($admin -> save()){
						
					}else{
						$this -> error("修改失败");
					}
				}
				
				   //dump($_POST);
				  // dump($access ->create());
				 // dump($access ->save());
				 
				  // EXIT;
				if($access -> create()){
					
					if($access ->where("uid = {$_POST['id']}")-> save()){
						$this -> redirect('Admin/index');
					}else{
						$this -> error('修改失败');
					}
				}else{
					$this -> error('修改失败');
				}
				
			}
			//把默认值带过去
			$id = $_GET['id'];
			$admins = $admin -> find($id);
			  
			$groups = $group -> where("status = 1") ->select(); //查找出全部的规则 并且状态是开启的
			$this -> assign('admin',$admins);    
			$this -> assign('groups',$groups);
			$this -> display();
		
		}
		
		//删除规则
		
		public function del(){
		
			$id  = I('id');//获取当前id参数
			$admin = M('admin');//实例化
			$map['id'] = array("IN",$id);//将获取到的id值存入数组
			if($admin -> where($map) -> delete($id)){

				$this -> redirect("Admin/index");
				
			}else{
				$this -> error("删除失败");
			}
			
		}
		
		//修改状态
		public function status(){
			
		    $admin = M('admin');
			$id = $_GET['id'];
			$status = $_GET['status'];
			$map['id'] = $id;
			if($status){
				$map['status'] = 0;
				$admin -> save($map);
				$this -> redirect("Admin/index");
			}else{
				$map['status'] = 1;
				$admin -> save($map);
				$this -> redirect("Admin/index");
			}
		
		}
		
		
		//文件上传
	private function upload(){
		//dump($_FILES);
	
		$config = array("maxSize" => 1000000,
						"exts" 	  => array("jpg","jpeg","png","gif"),
						"rootPath" =>"./Public/Upload/"
						);//文件配置属性数组
		$upload = new \Think\Upload($config);//自定义构造方法
		$info = $upload -> uploadOne($_FILES['photo']);//在写好的构造方法和配置下执行上传函数
		
		if($info){
			$filePath = $info['savepath'].$info['savename'];
			return $filePath;
		}else{
			$this -> error($upload -> getError());
		}
	}
	}
?>