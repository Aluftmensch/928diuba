<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
        $this->display();
    }
    public function verify(){
    	ob_clean();
    	$Verify= new \Think\Verify();
    	$Verify->entry();
    }
    public function checklogin(){
        $admin=M('admins');
       $map=array();
       $map['admin_name']=I('post.username');
       $map['password']=I('post.password');
       $res=$admin->where($map)->select();
       if($res=null){
       	$this->error("用户密码错误");
       }else{
       	session("flag","logok");
       	 redirect(U("Count/count"));
       }
    }
   
   
public function checkAdmin(){
	if(!session('?flag'))
    	{
          $this->error('无权访问此页',U('Admin/index/index'));
    	}
}
public function _initialize(){
       // 只要不是显示登录页面和处理登录、验证码这些，其他情况都要进行session验证。
        if(ACTION_NAME!='index' && ACTION_NAME!='checkLogin'&& ACTION_NAME!='verify'){
            if(null==session('flag')|| session('flag')!='logok'){
                redirect('index');
            }
        }
    }

}

