<?php
	namespace Home\Controller;
	use Think\Controller;
	header("content-type:text/html;charset=utf-8");
	class TeacherController extends Controller {
		public function index(){
		 
		 //讲师详情
		 $id = $_GET['id'];
		 $teacher = M('teacher');
		 $data = $teacher -> find($id);
		 $this -> assign("teacher",$data);
		 $this -> display();
	}

	public function becometeacher(){
		    $this->display();
    }

}