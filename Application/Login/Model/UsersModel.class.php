<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/7/26
 * Time: 9:39
 */
namespace Login\Model;
use Think\Model;

class UsersModel extends Model{
    //校验用户名跟密码
    protected $_validate = array(
        array("username","require","用户名必须"),
        array("password","require","密码必须"),
    );

    /**
     * @param $username
     * @param $password
     */
    public function checkLogin($username,$password){
        //判断是否为空，空就直接返回
        if(!$username||!$password){
            return array("status"=>false,"msg"=>"用户名或密码为空");
        }
        //加密32位md5
        $password = md5($password);
        if($data = $this->where(["username"=>$username,"password"=>$password])->select()){
            return array("status"=>true,"msg"=>"用户信息正确","data"=>$data);
        }else{
            return array("status"=>false,"msg"=>"用户名或密码错误");
        }
    }

    public function addData($data){
        $data["password"] = md5($data["password"]);
        if($id = $this->add($data)){
            return $id;
        }else{
            return false;
        }
    }

}