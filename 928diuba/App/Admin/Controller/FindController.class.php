<?php
namespace Admin\Controller;
use Think\Controller;
class FindController extends BaseController {
    public function index(){
       echo 'Hello Admin';
}
public function findlist(){
      //调用模型层获取数据
	$findsmodel=M('find');
	//var_dump($usersmodel);
	$find=$findsmodel->order('id asc')->select();//降序

	//调用视图层显示数据
		$this->find=$find;
		//var_dump($users);
		$this->display();
}
public function delfind($id){
       //echo $id;
      
    // $id=$_GET['id'];
     $findmodel=M('find');
     $picture=$findmodel->field("picture")->where("id=$id")->select();
     unlink('../../../Public/Admin/photo/'.$picture[0]["picture"]);
     unlink('F:/wamp/www/928diuba/Public/Admin/photo/'.$picture[0]["picture"]);
      if(false!== $res=$findmodel->where("id=$id")->delete()){
    $this->success("删除成功！");
     }
     else{
       $this-error('删除失败！');
      }

}
public function detail($id){
      //调用模型层获取数据
  $findmodel=M('find');
  //var_dump($usersmodel);
  $find=$findmodel->where("id=$id")->select();//降序

  //调用视图层显示数据
    $this->find=$find;
    //var_dump($users);
    $this->display();
}
public function find($id){
      //调用模型层获取数据
  $findsmodel=M('find');
  //var_dump($usersmodel);
  $find=$findsmodel->where("id=$id")->find();//降序

  //调用视图层显示数据
    $this->find=$find;
    //var_dump($users);
    $this->display();
}
 

}