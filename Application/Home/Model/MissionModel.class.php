<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/9/29
 * Time: 18:01
 */
namespace Home\Model;
use Think\Model;

class MissionModel extends Model{
    protected $trueTableName = "mission";

    protected $_auto = array(
        array("created_at","time",1,"function"),
        array("updated_at","time",3,"function")
    );

    public function addData($data){
        return $this->add($data);
    }

    public function getDataByUser($user_id){
//        $this->where([""])
    }
}