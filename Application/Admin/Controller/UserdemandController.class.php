<?php
nameSpace Admin\Controller;
//use Think\Controller;

class UserdemandController extends PublicController{

    //遍历用户
    public function demand(){

        $user = M("demand");
        $map['name'] = array("LIKE","%{$_GET['des']}%");
        $count = $user -> where($map) -> count();
        $Page = new \Think\Page($count,4,$_GET);
        $show = $Page -> show();
        $data = $user ->field("id,name,content,address,tell,uptime") ->where($map)->order("id DESC") -> limit($Page ->firstRow.','.$Page -> listRows) -> select();

        foreach($data as &$d ){
//            $users=$user->field("email")->find($d['uid']);
//            $d['email']=$users['email'];
            $d['uptime']=date("Y-m-d H:i:s",$d['uptime']);
        }
        $num = ($Page -> nowPage -1)*($Page ->listRows) +1;
        $this -> assign("num",$num);
        $this -> assign("page",$show);
        $this-> assign("demand",$data);
        $this -> display();

    }
    /**
     *	del() 删除
     *
     */
    public function del(){
        $id = I("id");
        $adv = M("demand");
        // dump($id);
        // exit;
        $map['id'] = array("IN",$id);

        if($adv -> where($map) -> delete($id)){
            $this -> redirect("Userdemand/demand");
        }else{
            $this -> error("广告删除失败");
        }
    }
}
?>