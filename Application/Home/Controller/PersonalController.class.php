<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/8/3
 * Time: 18:00
 */
namespace Home\Controller;
use Think\Controller;

class PersonalController extends BaseController{

    public function index(){
        $this->display();
    }

    public function savePassword(){
        $user_id = $_SESSION["login_user"]["id"];
        $oldPassword = I("post.old_password");
        $newPassword = I("post.new_password");
        $rePassword = I("post.re_password");

        if($newPassword!=$rePassword){
            $this->error("两次密码不一样");
        }

        if(D("Users")->checkOldPassword($user_id,$oldPassword)===false){
            $this->error("旧密码不对");
        }

        if(D("Users")->savePassword($user_id,$newPassword)!==false){
            $this->success("保存成功");
        }else{
            $this->error("保存失败");
        }
    }

    public function myMission(){
        $user_id = $_SESSION["login_user"]["id"];
        if(!$user_id){
            $this->error("异常");
        }
        D("Mission")->getDataByUser($user_id);
        $this->display("my_mission");
    }

}