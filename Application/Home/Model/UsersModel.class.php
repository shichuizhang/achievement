<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/11/4
 * Time: 17:25
 */
namespace Home\Model;
use Think\Model;

class UsersModel extends Model{

    public function savePassword($user_id,$oldPassword,$newPassword){

    }

    public function checkOldPassword($user_id,$oldPassword){
//        $this->where([""])
    }

}