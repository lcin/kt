<?php
	nameSpace Admin\Controller;
	//use Think\Controller;
	header("content-type:text/html;charset=utf-8");
	class AdviceController extends PublicController{
		public function index(){
			$advice=M("advice");//获取advice数据
			$user=M("user");//获取user用户数据
			$map['title'] = array("LIKE","%{$_GET['title']}%");//获取搜索框中输入的标题放入数组中
			$count = $advice -> where($map)-> count();//根据所输入的标题搜索返回count值
			$Page = new\Think\Page($count,3);//根据获取的count值按3个3个分页
			$show = $Page -> show();//组装分页链接
			$data = $advice -> where($map) -> limit($Page -> firstRow.','.$Page -> listRows)->select();
			//获取到的advice数据按照输入的标题这个条件查询数据
			$num = ($Page -> nowPage -1)*($Page ->listRows) +1;
			//从1开始增加的编码
			
			foreach($data as &$d ){
			    //foreach循环依次将获取到的data数据赋给d值
				$users=$user->field("email")->find($d['uid']);
				//用户表根据用户id值查询对应的email值
				$d['email']=$users['email'];
				//将获取到的email值赋给d值
				$d['time']=date("Y-m-d H:i:s",$d['time']);
				//格式
			}
			$this -> assign("num",$num);
			$this -> assign("page",$show);
			$this->assign("datas",$data);
			$this->display();
			//搜索功能和显示功能的共用，当搜索框中为空的时候，便搜索所有数据，获得的自然是所有数据
            //当搜索框中有数据时便模糊搜索出对应的数据
		}
		public function del(){
			$advice=M("advice");
			$id=I("id");
			//获取当前点击的数据id
			$map['id']=array($id);
			//存入当前数据id
			if($advice->where($map)->delete($id)){
			    //在advice中根据当前数据id执行删除该id下的数据
				$this->redirect("Advice/index");
			}else{
				$this->error("删除失败");
			}
		}
	}
?>