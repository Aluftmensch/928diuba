<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController {
    public function index(){
       echo 'Hello Admin';
}
public function userlist(){
      //调用模型层获取数据
	$usersmodel=M('users');
	//var_dump($usersmodel);
	$users=$usersmodel->order('id asc')->select();//降序

	//调用视图层显示数据
		$this->users=$users;
		//var_dump($users);
		$this->display();
}

    
 public function deluser($id){
      // echo $id;
    // $id=$_GET['id'];
     $usersmodel=M('users');
     $picture=$usersmodel->field("photo")->where("id=$id")->select();
     unlink('../../../Public/Admin/photo/'.$picture[0]["picture"]);
     unlink('F:/wamp/www/928diuba/Public/Admin/photo/'.$picture[0]["picture"]);
     if(false!== $res=$usersmodel->where("id=$id")->delete()){
     $this->success("删除成功！");
    }
     else{
      $this-error('删除失败！');
     }
}

 public function changestate($id,$state){
      $usersmodel=M('users'); 
      $usersmodel->state=($state+1)%2;
      if(false!==$usersmodel->where("id=$id")->save()){
          $this->success('修改成功！');
      }else{
          $this->error('修改失败');
  }
}


}