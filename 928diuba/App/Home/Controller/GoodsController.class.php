<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;


class GoodsController extends BaseController
{
    public function index()
    {
        $this->display();
    }
    public function printQrcode()
    {
        dump($_POST);
       
       
       
        //$this->display();
    }
    public function goods(){
       
		//获取当前登录用户的信息
        $user = M('users');
        $data['telephone']=$_SESSION['telephone'];
        $res = $user->where($data)->find();
        //dump($res);

        $this->list=$res;
        //显示发布的所有二维码信息
        $goods = M('goods');//实例化news对象
        $goodsData['userid']=$data['telephone'];
        $qrcodeList= $goods->where($goodsData)->select();
        $this->qrcodeList=$qrcodeList;
		//分页
		//$qrcodenum=$goods->where($goodsData)->count();
		// $Page = new \Think\Page($qrcodenum,2);
		// $this->pageNav=$Page->show();//在页面{pageNav}
		// $this->qrcodeList=$goods->where($goodsData)->order("id desc")->limit($Page->firstRow,2)->select();

       

        $this->display();
    }

   //删除二维码
    public function delqrcode($id)
    {
		
        $goodsModel = M('goods');
		$goods=$goodsModel->where("id=$id")->find();
		unlink(realpath("Public/Uploads/qrcode/".$goods["qrpath"]));
        if($goodsModel->delete($id)) {
            $this->success('删除成功',U('goods'));//注意本处必须有参数2，如果没有，在分页功能中就会出问题
        }
        else {
            $this->error('删除失败');
        }
    }


	public function goodslist(){
		$Page = new Page($totalRows);
	}
	public function goodsadd(){
        $goods=D("goods");
        if ($goods->create()) {
           // $sql="SELECT Auto_increment FROM information_schema.`TABLES` WHERE Table_Schema='diuba'AND table_name = 'diuba_goods'";
           // $rs=M()->query($sql);
           // $ai=$rs[0]["auto_increment"];
            
        //生成二维码
        //$qrcodeString="名字：".$goods->goods_name."\r\n联系人：".$goods->username."\r\n联系电话：".$goods->telephone."\r\n邮箱:".$goods->email."\r\n备注：".$goods->note;  
       // $qrcodeString="http://".$_SERVER['SERVER_NAME'].U("Index/detail",array("id"=>$ai));   

        //$goods->qrpath=$this->qrcode($qrcodeString);
           $newid= $goods->add();

        if (false !== $newid) {
            $qrcodeString="http://".$_SERVER['SERVER_NAME'].U("Index/detail",array("id"=>$newid));   

            $data["qrpath"]=$this->qrcode($qrcodeString);   
            $data["id"]=$newid;
            $goods->save($data);
            $this->success('二维码生成成功！');
            } else {         
                $this->error('数据错误');           
                }
        }else{
            $this->error($user->getError());
        }
		// $goods=D("goods");
		// if ($goods->create()) {
  //           $sql="SELECT Auto_increment FROM information_schema.`TABLES` WHERE Table_Schema='diuba'AND table_name = 'diuba_goods'";
  //           $rs=M()->query($sql);
  //           $ai=$rs[0]["auto_increment"];
            
		// //生成二维码
	 //    //$qrcodeString="名字：".$goods->goods_name."\r\n联系人：".$goods->username."\r\n联系电话：".$goods->telephone."\r\n邮箱:".$goods->email."\r\n备注：".$goods->note;	
  //       $qrcodeString="http://".$_SERVER['SERVER_NAME'].U("Index/detail",array("id"=>$ai));   

		// $goods->qrpath=$this->qrcode($qrcodeString);
		// if (false !== $goods->add()) {
  //               $this->success('二维码生成成功！');
  //           } else {         
		// 		$this->error('数据错误');           
		// 		}
		// }else{
  //           $this->error($user->getError());
  //       }
	}



//生成二维码
    public function qrcode($qrcodeString){
         vendor("phpqrcode.phpqrcode");

            $model = new \QRcode();
            $path="Public/Uploads/qrcode/";
            if(!file_exists($path))
            {
                mkdir($path, 0700);
            }
			$filename=time().'.png';
            $path="Public/Uploads/qrcode/".$filename; //合成路径
            $level = 'H';
            $size = 4;
            $model::png($qrcodeString,$path, $level, $size,1);
            //框架生成二维码LOGO
            $logo = "Public/Uploads/qrcode/logo.jpg";
            $image = new \Think\Image();
            $image->open($path)->water($logo,\Think\Image::IMAGE_WATER_CENTER,100)->save($path);
            return $filename;
   
    }


//显示详细信息
    public function detail(){
        $data["id"]=I('get.id');
        $this->goodsDetail=M("goods")->where($data)->find();
        $this->display();
    }


}