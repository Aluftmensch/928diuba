<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function index(){
       echo 'Hello Admin';
}

 public function _initialize()
    {
        if (!session('?telephone')) {
            $this->error('请登录后访问本页面', U('Users/login'));
        }
}
}
?>