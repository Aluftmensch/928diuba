<?php

namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $adpic = M('adpic');
        // $adpic=$adpicmodel->order('isfirst desc,id desc')->select();//降序
        // $this->adpic=$adpic;
        //var_dump($users);
        

        $lost = M('losts');//实例化news对象
        $find = M('find');//实例化news对象
        //查询招领和失物启示的个数
        $this->lostnum=$lost->count();
        $this->findnum=$find->count();
        //查询已完结的启示个数
        $lostnumover=$lost->where("isfinish=1")->count();
        $findnumover=$find->where("isfinish=1")->count();
        $this->all=$lostnumover+$findnumover;
        $this->lostlist=$lost->where("isfinish=0")->order("isfirst desc,id desc")->limit(4)->select();
        $this->findlist=$find->where("isfinish=0")->order("id desc")->limit(4)->select();
        $this->display();

}

public function detail(){
        $data["id"]=I('get.id');
        $this->goodsDetail=M("goods")->where($data)->find();
        $this->display();
    }
}

?>
