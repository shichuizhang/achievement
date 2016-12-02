<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/11/16
 * Time: 17:07
 */
namespace Home\Controller;
use Think\Controller;

class MobileController extends BaseController{

    /**
     * 首页
     */
    public function index(){
        $this->display();
    }

    /**
     * 任务类型列表
     */
    public function missionType(){
        $this->display("mission_type");
    }

    /**
     * 新增页面
     */
    public function missionForm(){
        $this->display("misson_form");
    }

    public function addMission(){
        $user_id = $_SESSION["login_user"]["id"];
        if(!$user_id){
            $this->error("请先登录");
        }
        $data = I("post.");
        if(D("Mission")->addData($data)){
            $this->success("保存成功");
        }else{
            $this->error("保存失败");
        }
    }

    /**
     * 详情页面
     */
    public function missionDetail(){
        $this->display("mission_detail");
    }

    /**
     * 各类型任务列表
     */
    public function goType(){
        $type = I("type");
        $this->display("list");
    }



}