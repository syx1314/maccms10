<?php
namespace app\common\util;
class CommonUtil{
    /**
     * json 返回值封装
     *
     */
 public static  function jsonResult($code,$message='',$data){
        if(!is_numeric($code)){
            return;
        }
        $result=array(
            'code'=>$code,
            'message'=>$message,
            'data'=>$data
        );
        echo json_encode($result);
        exit;
    }
}
