<?php
namespace Home\Controller;
use Think\Controller;
class DemandController extends Controller{
    public function demand(){
        $this -> display();
    }

//    录入用户需求
    public function tab(){

        $demand = M('demand');
        $user=M('userdetail');
        $name=$_POST['name'];
        $test=$user->where(['realname'=>$name])->find();
        $_POST['time'] = time();


        if ($_POST['name']==$test['realname']){
            if($_POST['tell']!=null){
                $date['tell']=$_POST['tell'];
            }else{
                $this->error('请输入您的联系方式');exit();
            }
            if($_POST['name']!=null){
                $date['name']=$_POST['name'];
            }else{
                $this->error('请输入您的姓名');exit();
            }
            if($_POST['content']!=null){
                $date['content']=$_POST['content'];
            }else{
                $this->error('我还不知道您需要什么....');exit();
            }
            if($_POST['address']!=null){
                $date['address']=$_POST['address'];
                $date['uptime']=$_POST['time'];
            }else{
                $this->error('请输入您所在单位名称');exit();
            }

            if ($demand->add($date)){
                $this->success('提交成功','Demand/demand',2);
            }else{
                $this->error('对不起，信息添加失败','Demand/demand',2);
            }
        }else{
            $this->error('对不起，请输入您的真实姓名','Demand/demand',2);
        }
        }
}
?>