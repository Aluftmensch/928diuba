<?php
namespace Home\Controller;
use Think\Controller;
class UsersController extends Controller {
    public function login(){
       
	   $this->display();
    }
	
	
	public function reg(){
       
		$this->display();


    }

	public function register(){

		$user = D("users");

		if($user->create()){

			if($_FILES['file']['error']==0){

				$logoinfo = $this->upload();
				$pname = $logoinfo['file']['savename'];
			}else{
				$pname = "default.jpg";
			}

			$user->photo = $pname;

			if(false !== $user->add()){
				$this->success('注册成功！');
			}else{
				$this->error('数据错误');
			}
		}else{
			$this->error($user->getError());
		}



//	$user = D('users');
//		if($user->create()){
//
//		}

//		echo "reg";
//		dump($_POST);
//		$User = M("users"); // 实例化User对象
//		$data['telephone'] = I('post.telephone');
//		$data['aliasname'] = I('post.aliasname');
//		$data['password'] = I('post.password');
//		$data['email'] = I('post.email');
//		$User->add($data);
//
//
//		$res = $User->add($data);
//		if(false!== $res){
//
//		$this->success('注册成功','login');
//		}
//		else{
//				$this->error('数据错误');
//			}
//		echo $res;
    }

	public function upload(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Public/Admin/photo'; // 设置附件上传根目录
		$upload->savePath  =    false; // 设置附件上传（子）目录
		dump($_FILES);
		$info   =   $upload->upload();  // 上传文件
		dump($info);
		if(!$info) {        $this->error($upload->getError());    }
		else{
//			$this->success('上传成功！');
		return $info;
			}
	}

	public function thumb(){

		$image = new\Think\Image();
		$image->open('./1.jpg');

		$image->thumb(150,150)->save('./thumb.jpg');
	}


	public function checkLogin(){
		$code=I('post.verify');  //获取用户在表单中输入的验证码字符串
		if(!$this->check_verify($code))$this->error('验证码错误'); //调用check_verify函数，将用户输入的验证码加密处理后和Session中已存的验证码进行比较

		$usermodel=M('users'); //实例化diuba_users表
		$map   =   array();
		$map['telephone']	=trim(I('post.telephone'));//获取用户输入的手机号
		$map['password']	=md5(trim(I('post.password')));//获取用户输入的密码，并用md5加密

		$res=$usermodel->where($map)->select();
		if($res==null){
			$this->error('账号或密码错误');
		}else{
			$_SESSION['telephone']=$map['telephone'];
			$_SESSION['alias']=$res[0]["aliasname"];
			redirect(U("Goods/goods"));
		}
	}
	public function _initialize(){
		//只要不是显示登录页面和处理登录、验证码这些，其他情况都要进行session验证。
		if(ACTION_NAME!='index' && ACTION_NAME!='checkLogin'&& ACTION_NAME!='verify'){
			//redirect('index');
		}
	}

	function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}

	public function verify(){

		ob_clean();
		$Verify = new \Think\Verify();
		$Verify->entry();

	}


}

