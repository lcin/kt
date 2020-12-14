<?php


namespace Admin\Controller;

use Admin\Controller\PublicController;

header("content-type:text/html;charset=utf-8");
class ActivityController extends PublicController
{
    public function index(){
        $activity=M('activitycreate');
        //获取activity数据
        $admin=M('admin');
        $map['activityname'] = array("LIKE","%{$_GET['title']}%");
        //获取搜索框中数据赋给map数组
        $count=$activity -> where($map) -> count();
        //根据输入的数据查询获得count值
        $Page=new\Think\Page($count,5);
        //根据获取的count值按3个3个的分页
        $show = $Page ->show();
        //组装分页链接
        $data=$activity->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        //获取到的activity数据按照输入的标题条件查询数据
        $num=($Page->nowPage-1)*($Page->listRows)+1;
        //从1开始的编码
        foreach ($data as &$d){

            $names=$admin->field("name")->find($d['adminid']);
            $d['adminname']=$names['name'];
            //foreach循环依次将获取到的data数据赋给d值
            $d['nowtime']=date("Y-m-d H:i:s",$d['nowtime']);
            //格式
        }
        $this -> assign("num",$num);
        $this -> assign("page",$show);
        $this->assign("datas",$data);
        $this->display();
        //搜索功能和显示功能的共用，当搜索框中为空的时候，便搜索所有数据，获得的自然是所有数据
        //当搜索框中有数据时便模糊搜索出对应的数据
    }

    //删除
    public function del(){
        $activity=M("activitycreate");
        $id=I("activityid");
        $map['activityid']=array($id);
        if($activity->where($map)->delete($id)){
            $this->redirect("Activity/index");
        }else{
            $this->error("删除失败");
        }
    }


    //活动参与列表
    public function join(){
        $activityjoin=M('activityjoin');
        //获取activityjoin数据
        $map['activityname'] = array("LIKE","%{$_GET['title']}%");
        //获取搜索框中数据赋给map数组
        $count=$activityjoin -> where($map) -> count();
        //根据输入的数据查询获得count值
        $Page=new\Think\Page($count,5);
        //根据获取的count值按3个3个的分页
        $show = $Page ->show();
        //组装分页链接
        $data=$activityjoin->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        //获取到的join数据按照输入的标题条件查询数据
        $num=($Page->nowPage-1)*($Page->listRows)+1;
        //从1开始的编码
        foreach ($data as &$d){
            //foreach循环依次将获取到的data数据赋给d值
            $d['jointime']=date("Y-m-d H:i:s",$d['jointime']);
            //格式
        }

        $this -> assign("num",$num);
        $this -> assign("page",$show);
        $this->assign("datas",$data);
        $this->display();
        //搜索功能和显示功能的共用，当搜索框中为空的时候，便搜索所有数据，获得的自然是所有数据
        //当搜索框中有数据时便模糊搜索出对应的数据

    }

    //删除参与人员
    public function deljoin(){
        $activity=M("activityjoin");
        $id=I("joinid");
        $map['joinid']=array($id);
        if($activity->where($map)->delete($id)){
            $this->redirect("Activity/join");
        }else{
            $this->error("删除失败");
        }
    }

    //发布活动
    public function add(){
        $admin=M('admin');
        $activity=M('activitycreate');
        //网站配置
        $config = M("config");
        $configs = $config -> find();
        if($_POST['sub']){
            if ($activity -> create()){

                $_POST['nowtime'] = time();
                unset($_POST['sub']);

                if ($activity -> add($_POST)){
                    $this->redirect("activity/index");
                }else{
                    $this->error("发布活动失败");
                }
            }
        }
        if($_GET){
            $data=$admin->where($_GET)->field('id')->find();
            $this->assign("data",$data);
        }
        $this -> assign("configs",$configs);
        $this->display();
    }

}