<?php
namespace Admin\Controller;
use Think\Controller;
class CountController extends BaseController {
    public function index(){
       $this->display();
}
public function count()
    {
        $this->count1 = M('users')->count();
        $this->count2 = M('losts')->count();
        $this->count3 = M('find')->count();
        $this->count4 = M('goods')->count();
        $this->display();
     }
}
?>
