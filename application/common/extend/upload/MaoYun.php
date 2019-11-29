<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/27
 * Time: 上午 10:50
 */

namespace app\common\extend\upload;


class MaoYun
{

    public $name = '猫云云存储';
    public $ver = '1.0';
    public $id = "";

    /**
     * MaoYun constructor.
     */
    public function __construct()
    {
    }


    public function login($ob)
    {
        $this->id = $GLOBALS['config']['upload']['api']['maoyun']['id'];
        $APITolenUrl=$GLOBALS['config']['upload']['api']['maoyun']['urlToken'];
        $findTokenUrl = $APITolenUrl."/zyc/object/token?name=" . $this->id . "&url=" . "/".$ob;
        $header = array(
            "Action:GetObjectToken"
        );
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $findTokenUrl); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
//     curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        $return = curl_exec($curl);
        $res = json_decode($return, true);

//        print_r($res);
//        echo "token:". $res['data']['token']."----------------------------";
        //通过curl_getinfo()可以得到请求头的信息
        curl_close($curl);
        return $res['data']['token'];

    }

    public function submit($file_path)
    {
        $this->upload($file_path,$file_path);
        return $GLOBALS['config']['upload']['api']['maoyun']['url'] . '/' . $file_path;
    }
    public function upload($fileName, $file)
    {
        $token = $this->login($fileName);
        $host= $GLOBALS['config']['upload']['api']['maoyun']['url'];
//        echo  $token;
        //请求URL: http://桶外链地址/文件名 (put) （注:分配域名默认提供使用3天,请使用自定义域名）
        $url=$host.$fileName;
        $header = array(
            "Authorization:" . $token,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_PUT, true); //设置为PUT请求
        curl_setopt($ch, CURLOPT_INFILE, fopen($file, 'rb')); //设置资源句柄
        curl_setopt($ch, CURLOPT_INFILESIZE, filesize($file));

        $return = curl_exec($ch);
        curl_close($ch);
    }
}