<?php
/**
 * Created by PhpStorm.
 * User: 矢吹丈
 * Date: 2016/11/17
 * Time: 15:28
 */

function getExtension($filename){
    $fileAry = explode(".",$filename);
    $count = count($fileAry);
    if($count==1){
        return false;
    }
    $ext = $fileAry[($count-1)];
    return $ext;
}

function createNoncestr($length){
    $ran_str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $ran_len = strlen($ran_str);
    $result = "";

    for($i=0;$i<$length;$i++){
        $result.=substr($ran_str,mt_rand(0,$ran_len),1);
    }

    return $result;

}

function createNumber($length){
    $ran_str = "0123456789";
    $ran_len = strlen($ran_str);
    $result = "";

    for($i=0;$i<$length;$i++){
        $result.=substr($ran_str,mt_rand(0,$ran_len),1);
    }
    return $result;
}