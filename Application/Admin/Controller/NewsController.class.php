<?php
namespace Admin\Controller;
//use Think\Controller;

class NewsController extends PublicController {
    
	/**
	*	select() 遍历新闻列表
	*
	*/
	public function index(){
      
		$news = M("news");  
		$map['title'] = array("LIKE","%{$_GET['title']}%");
		$count = $news -> where($map) -> count();
		$Page = new \Think\Page($count,3,$_GET);
		$show  = $Page  ->show();
		$data = $news -> field("id,title,content,ntime") -> where($map) ->order("id DESC") -> limit($Page->firstRow.','.$Page -> listRows) -> select();
		 
		 $num = ($Page -> nowPage -1)*($Page -> listRows)+1;
		foreach($data as &$d){
			$d['ntime']  = date('Y-m-d H:i:s',$d['ntime']);
		}
		
		$this -> assign("num",$num);
		$this ->assign("page",$show);
		//$this ->assign("time",$time);
		$this -> assign("news",$data);
		$this -> display(); 
	}
	
	/**
	*	add()添加新闻
	*
	*/
	public function add(){
		
		
		$news = M('news');
		
		if($_POST['sub']){
			$_POST['ntime'] = time();
			if($news -> create()){
				
				if($news -> add()){
					
					$this -> redirect("news/index");
				}else{
					
					$this -> error("添加新闻失败");
				}
			}
		}
		$this -> display();
	}
	
	/**
	*	mod() 修改新闻
	*
	*/
	public function mod(){
		
		$news = M("news");
		//dump($_POST);
		if($_POST['sub']){
			
			$_POST['ntime'] = time();
			if($news -> create()){
			
				if($news -> save()){
					
					$this -> redirect("news/index");
				}else{
					
					$this -> error('修改失败'); 
				}
			}
		}
		
		$id = $_GET['id'];
		$data = $news -> find($id);
		$this -> assign('news',$data);
		$this -> display();
	}
	
	public function del(){
		$id = $_GET['id'];
		$news = M("news");
		$map['id'] = array("IN",$id);
		
		if($news -> where($map)-> delete($id)){
			
			$this -> redirect("news/index");
		}else{
			
			$this -> error("删除失败");
		}
	}
}


	