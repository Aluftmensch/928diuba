<?php
namespace Admin\Controller;
use Think\Controller;
class LostController extends BaseController {
    public function index(){
       echo 'Hello Admin';
}
public function lostlist(){
      //调用模型层获取数据
  $lostsmodel=M('losts');
  //var_dump($usersmodel);
  $lost=$lostsmodel->order('id asc')->select();//降序

  //调用视图层显示数据
    $this->lost=$lost;
    //var_dump($lost);
    $this->display();
}
public function dellost($id){
       //echo $id;
      
    // $id=$_GET['id'];
     $lostmodel=M('losts');
     $picture=$lostmodel->field("picture")->where("id=$id")->select();
     unlink('../../../Public/Admin/photo/'.$picture[0]["picture"]);
     unlink('F:/wamp/www/928diuba/Public/Admin/photo/'.$picture[0]["picture"]);
      if(false!== $res=$lostmodel->where("id=$id")->delete()){
    $this->success("删除成功！");
     }
     else{
       $this-error('删除失败！');
      }

}
}