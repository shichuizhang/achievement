<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/7/26
 * Time: 9:20
 */
namespace Login\Controller;
use Think\Controller;

class IndexController extends Controller{
    //登录页面
    public function index(){
        $this->display();
    }

    /**
     * 提交登录信息
     */
    public function login(){
        //先将输入两边空格去掉
        $username = trim(I("username"));
        $password = trim(I("password"));
        //判断登录信息是否正确
        $result = D("Users")->checkLogin($username,$password);
        if($result["status"]){
            $_SESSION["login_status"] = true;
            $_SESSION["login_user"] = $result["data"];
            $this->success("登录成功","/Home/Index/index",2);
        }else{
            $this->regist();
            //$this->error($result["msg"]);
        }
    }

    public function regist(){
        //先将输入两边空格去掉
        $data["username"] = trim(I("post.username"));
        $data["password"] = trim(I("post.password"));
        if($result = D("Users")->addData($data)){
            $data["id"] = $result;
            $_SESSION["login_status"] = true;
            $_SESSION["login_user"] = $data;
            $this->success("注册成功","/Home/Index/index",2);
        }else{
            $this->error("登录失败");
        }

    }

}