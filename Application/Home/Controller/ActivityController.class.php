<?php


namespace Home\Controller;


use Think\Controller;

class ActivityController extends Controller
{
    //活动列表
    public function index()
    {
        $activity =M('activitycreate');
        $admin=M('admin');
        $count=$activity->count();
        $Page=new\Think\Page($count,5);
        //根据获取的count值按5个5个的分页
        $show = $Page ->show();
        //组装分页链接
        $data = $activity ->limit($Page->firstRow.','.$Page->listRows)-> select();

        foreach ($data as &$d){

            $names=$admin->field("name")->find($d['adminid']);
            $d['adminname']=$names['name'];
            //foreach循环依次将获取到的data数据赋给d值
            $d['nowtime']=date("Y-m-d H:i:s",$d['nowtime']);
            //格式
        }

        $this -> assign("page",$show);
        $this ->assign("datas",$data);
        $this->display();
    }

    //活动详情
    public function xiangqing(){
        $activity=M('activitycreate');
        $id=I("activityid");
        $map['activityid']=array($id);
        $data=$activity->where($map)->select($id);
        $this -> assign("data",$data);

        $this->display();
    }

    //加入活动
    public function add()
    {
        //添加数据加入活动
        $join = M('activityjoin');
        //获取activity数据
        $activity = M('activitycreate');
        $ids = I("activityid");
        $maps['activityid'] = array($ids);

        $aname=$join->where("activityid = {$ids}")->select();
        //当前用户下在activityjoin表中查询获取到的activityname和根据activityid查询到的activityname是否相同，如果相同则返回已经加入该活动
        if ($aname == null ) {
            $datas=$activity->where($maps)->select($ids);
            $this -> assign("datas",$datas);

            if($_POST['sub']){
                if( !$_POST['uid']){
                    $this ->redirect("Login/index");
                }
                if($join->create()){
                    //获取时间数据传给表单一起提交
                    $_POST['jointime'] = time();
                    unset($_POST['sub']);
                    if($join -> add($_POST)){
                        $this ->redirect("Activity/index");
                    }else{
                        $this->error("提交失败");
                    }
                }else{
                    $this->error("提交失败");
                }
            }
            $this->display();


        } else {
            $this->error("您已经加入该活动了！");


        }
    }

}