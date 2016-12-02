<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/8/3
 * Time: 17:53
 */
namespace Home\Controller;
use Think\Controller;
class MissionController extends BaseController{
    /**
     * 任务类型列表
     */
    public function index(){
        $this->display("type");
    }

    /**
     * 新增页面
     */
    public function add(){
        $this->display();
    }

    public function addMission(){
        $data = I("post.");
        if($_FILES["pic_url"]["name"]){
            $nameAry = explode(".",$_FILES["pic_url"]["name"]);
            $ext = getExtension($_FILES["pic_url"]["name"]);
            $new_filename = C("FILE_SAVE_PATH").createNoncestr(10).time().".".$ext;
            if(!move_uploaded_file($_FILES["pic_url"]["tmp_name"],".".$new_filename)){
                $this->error("文件上传失败");
                exit;
            }
            $data["pic_url"] = $new_filename;
        }

        if(D("Mission")->addData($data)!==false){
            $this->success("保存成功");
        }else{
            $this->error("保存失败");
        }
    }

    /**
     * 详情页面
     */
    public function detail(){
        $this->display();
    }

    /**
     * 各类型任务列表
     */
    public function goType(){
        $type = I("type");
        $this->display("list");
    }


}