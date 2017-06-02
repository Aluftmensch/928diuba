<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends BaseController {
    public function index(){
       $this->display();
}
public function goodslist(){
      //调用模型层获取数据
	$goodsmodel=M('goods');
	//var_dump($goodssmodel);
	$goods=$goodsmodel->order('id asc')->select();//降序

	//调用视图层显示数据
		$this->goods=$goods;
		//var_dump($goods);
		$this->display();
}

    
//  public function delgoods($id){
//       // echo $id;
//     // $id=$_GET['id'];
//      $goodsmodel=M('goods');
//      if(false!== $res=$goodsmodel->where("id=$id")->delete()){
//      $this->success("删除成功！");
//     }
//      else{
//       $this-error('删除失败！');
//      }
// }

public function delgoods($id){
       //echo $id;
      
    // $id=$_GET['id'];
     $goodsmodel=M('goods');
     $picture=$goodsmodel->field("qrpath")->where("id=$id")->select();
     unlink('../../../Public/Admin/photo/'.$picture[0]["picture"]);
     unlink('F:/wamp/www/928diuba/Public/Admin/photo/'.$picture[0]["picture"]);
      if(false!== $res=$goodsmodel->where("id=$id")->delete()){
    $this->success("删除成功！");
     }
     else{
       $this-error('删除失败！');
      }

}
 public function changestate($id,$state){
      $goodsmodel=M('goods'); 
      $goodsmodel->state=($state+1)%2;
      if(false!==$goodsmodel->where("id=$id")->save()){
          $this->success('修改成功！');
      }else{
          $this->error('修改失败');
  }
}


}