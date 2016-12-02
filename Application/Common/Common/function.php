<?php
/**
 * Created by PhpStorm.
 * User: ʸ����
 * Date: 2016/7/26
 * Time: 9:19
 */
function uploadImage($file,$path){
    if(!is_uploaded_file($file)){
        $result["code"] = 6;
        $result["message"] = "no upload file";
        return $result;
    }
    $mineType = detectMine($file);

    move_uploaded_file($file["tmp_name"],$path);

}

