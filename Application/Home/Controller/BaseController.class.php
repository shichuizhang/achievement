<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/7/27
 * Time: 9:52
 */
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller{
    /**
     * 首先是要判断是否登录拉
     */
    public function __initialize(){
        var_dump($_SESSION);
        if(!$_SESSION["login_status"]){
            $this->error("请先登录~~","Login/Index/index");
        }
    }

}