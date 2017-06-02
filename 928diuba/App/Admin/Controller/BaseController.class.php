<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller
{
    public function _initialize()
    {
        header("Content-type:text/html;charset=utf-8");
        $this->checkAdmin();
    }
    
    private function checkAdmin()
    {
        if (!session('?flag')) {
            $this->error('无权限访问此页', U('Admin/index/index'));
        }
    }
    public function at()
    {
        $localtime = date('Y-m-d H:i:s', time());
        return $localtime;
    }

    public function show_bug($val)
    {
        echo "<pre>";
        echo var_dump($val);
        echo "</pre>";
        die();
    }

}
?>