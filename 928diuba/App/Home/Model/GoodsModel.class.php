<?php
namespace Home\Model;
use Think\Model;
class GoodsModel  extends Model  {
    protected $_auto = array(
        array('createtime','getdate',self::MODEL_INSERT,'callback'),
        array('email','trim',self::MODEL_INSERT,'function'),
    );
    function getdate(){
        return date('Y-m-d');
    }

}
?>