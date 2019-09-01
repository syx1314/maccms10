<?php

namespace app\index\controller;


use app\common\util\CommonUtil;



class App extends Base
{
    public function __construct()
    {
        parent::__construct();

        define('THIRD_LOGIN_CALLBACK', $GLOBALS['http_type'] . $_SERVER['HTTP_HOST'] . '/index.php/user/logincallback/type/');

        //判断用户登录状态
        $ac = request()->action();
        if (in_array($ac, ['login', 'logout', 'ajax_login', 'reg', 'findpass', 'findpass_msg', 'findpass_reset', 'reg_msg', 'oauth', 'logincallback', 'visit'])) {

        } else {
            if ($GLOBALS['user']['user_id'] < 1) {
                model('User')->logout();
               CommonUtil::jsonResult("400", '未登录', null);

                exit;
//                return $this->error('未登录', url('user/login'));
            }
            /*
            $res = model('User')->checkLogin();
            if($res['code']>1){
                model('User')->logout();
                return $this->error($res['msg'], url('user/login'));
            }
            */
//            echo json_encode($GLOBALS['user']);
        }
    }

    public function userInfo()
    {
        CommonUtil::jsonResult("200", "获取个人信息成功", $GLOBALS['user']);

    }

    public function zhibo(){
        $arrys=array();

         //央视
         $dataCCTV1["url"]='http://t.cn/RpFPVsE';
         $dataCCTV1["pic"]='/template/mac/images/tv/c1.png';
         $dataCCTV1["name"]='CCCTV 1';
         array_push($arrys,$dataCCTV1);
        $dataCCTV2["url"]='http://t.cn/RpFPN6v';
        $dataCCTV2["pic"]='/template/mac/images/tv/c2.png';
        $dataCCTV2["name"]='CCCTV 2';
        array_push($arrys,$dataCCTV2);
        $dataCCTV3["url"]='http://t.cn/RXQY4TK';
        $dataCCTV3["pic"]='/template/mac/images/tv/c3.png';
        $dataCCTV3["name"]='CCCTV 3';
        array_push($arrys,$dataCCTV3);
        $dataCCTV4["url"]='http://t.cn/RpFPrgx';
        $dataCCTV4["pic"]='/template/mac/images/tv/c4.png';
        $dataCCTV4["name"]='CCCTV 4';
        array_push($arrys,$dataCCTV4);
        $dataCCTV5["url"]='http://t.cn/RGXxHnd';
        $dataCCTV5["pic"]='/template/mac/images/tv/c5.png';
        $dataCCTV5["name"]='CCCTV 5';
        array_push($arrys,$dataCCTV5);
        $dataCCTV6["url"]='http://t.cn/RpFhJLn';
        $dataCCTV6["pic"]='/template/mac/images/tv/c6.png';
        $dataCCTV6["name"]='CCCTV 6';
        array_push($arrys,$dataCCTV6);
        $dataCCTV7["url"]='http://t.cn/RpFhhsh';
        $dataCCTV7["pic"]='/template/mac/images/tv/c7.png';
        $dataCCTV7["name"]='CCCTV 7';
        array_push($arrys,$dataCCTV7);
        $dataCCTV8["url"]='http://t.cn/RpFhSzl';
        $dataCCTV8["pic"]='/template/mac/images/tv/c8.png';
        $dataCCTV8["name"]='CCCTV 8';
        array_push($arrys,$dataCCTV8);
        $dataCCTV9["url"]='http://t.cn/RpFhwWm';
        $dataCCTV9["pic"]='/template/mac/images/tv/c9.png';
        $dataCCTV9["name"]='CCCTV 9';
        array_push($arrys,$dataCCTV9);
        $dataCCTV10["url"]='http://t.cn/RpFh2KW';
        $dataCCTV10["pic"]='/template/mac/images/tv/c10.png';
        $dataCCTV10["name"]='CCCTV 10';
        array_push($arrys,$dataCCTV10);
        $dataCCTV11["url"]='http://t.cn/RpFhyzk';
        $dataCCTV11["pic"]='/template/mac/images/tv/c11.png';
        $dataCCTV11["name"]='CCCTV 11';
        array_push($arrys,$dataCCTV11);
        $dataCCTV12["url"]='http://t.cn/RpFhU8c';
        $dataCCTV12["pic"]='/template/mac/images/tv/c12.png';
        $dataCCTV12["name"]='CCCTV 12';
        array_push($arrys,$dataCCTV12);
        $dataCCTV13["url"]='http://t.cn/RpFhb9z';
        $dataCCTV13["pic"]='/template/mac/images/tv/c13.png';
        $dataCCTV13["name"]='CCCTV 13';
        array_push($arrys,$dataCCTV13);
        $dataCCTV14["url"]='http://t.cn/RpFhqUF';
        $dataCCTV14["pic"]='/template/mac/images/tv/c14.png';
        $dataCCTV14["name"]='CCCTV 14';
        array_push($arrys,$dataCCTV14);
        $dataCCTV15["url"]='http://t.cn/RpFhtUX';
        $dataCCTV15["pic"]='/template/mac/images/tv/c15.png';
        $dataCCTV15["name"]='CCCTV 15';
        array_push($arrys,$dataCCTV15);

        $arr=array();
        //卫视频道
        $datahn["url"]='http://t.cn/RLQqNvg';
        $datahn["pic"]='/template/mac/images/tv/hn.png';
        $datahn["name"]='湖南卫视';
        array_push($arr,$datahn);

        $datazj["url"]='http://t.cn/R6Jrh0y';
        $datazj["pic"]='/template/mac/images/tv/zj.png';
        $datazj["name"]='浙江卫视';
        array_push($arr,$datazj);

        $datajs["url"]='http://t.cn/RVylk9M';
        $datajs["pic"]='/template/mac/images/tv/js.png';
        $datajs["name"]='江苏卫视';
        array_push($arr,$datajs);

        $datadf["url"]='http://t.cn/RLcRIHw';
        $datadf["pic"]='/template/mac/images/tv/df.png';
        $datadf["name"]='东方卫视';
        array_push($arr,$datadf);

        $databj["url"]='http://t.cn/RpFzrnr';
        $databj["pic"]='/template/mac/images/tv/bj.png';
        $databj["name"]='北京卫视';
        array_push($arr,$databj);

        $dataah["url"]='http://t.cn/RpFzDXB';
        $dataah["pic"]='/template/mac/images/tv/ah.png';
        $dataah["name"]='安徽卫视';
        array_push($arr,$dataah);

        $datasd["url"]='http://t.cn/RpFZvZn';
        $datasd["pic"]='/template/mac/images/tv/sd.png';
        $datasd["name"]='山东卫视';
        array_push($arr,$datasd);

        $datahenan["url"]='http://t.cn/RpFZL4M';
        $datahenan["pic"]='/template/mac/images/tv/ha.png';
        $datahenan["name"]='河南卫视';
        array_push($arr,$datahenan);
        $datajx["url"]='http://t.cn/RpFZqm8';
        $datajx["pic"]='/template/mac/images/tv/jx.png';
        $datajx["name"]='江西卫视';
        array_push($arr,$datajx);
        $datahlj["url"]='http://t.cn/RpFZVXT';
        $datahlj["pic"]='/template/mac/images/tv/hlj.png';
        $datahlj["name"]='黑龙江卫视';
        array_push($arr,$datajx);
        $datagd["url"]='http://t.cn/RpFZxtl';
        $datagd["pic"]='/template/mac/images/tv/gd.png';
        $datagd["name"]='广东卫视';
        array_push($arr,$datagd);
        $datatj["url"]='http://t.cn/RpFZXVc';
        $datatj["pic"]='/template/mac/images/tv/tj.png';
        $datatj["name"]='天津卫视';
        array_push($arr,$datatj);
        $datahb["url"]='http://t.cn/RpFZNi6';
        $datahb["pic"]='/template/mac/images/tv/hb.png';
        $datahb["name"]='湖北卫视';
        array_push($arr,$datahb);
        $dataheb["url"]='http://t.cn/RpFZWZA';
        $dataheb["pic"]='/template/mac/images/tv/heb.png';
        $dataheb["name"]='河北卫视';
        array_push($arr,$dataheb);
        $datacq["url"]='http://t.cn/RpFZYop';
        $datacq["pic"]='/template/mac/images/tv/cq.png';
        $datacq["name"]='重庆卫视';
        array_push($arr,$datacq);
        $datadn["url"]='http://t.cn/RpFZQHu';
        $datadn["pic"]='/template/mac/images/tv/dn.png';
        $datadn["name"]='东南卫视';
        array_push($arr,$datadn);
        $datasx1["url"]='http://t.cn/RpFZEC4';
        $datasx1["pic"]='/template/mac/images/tv/sx1.png';
        $datasx1["name"]='山西卫视';
        array_push($arr,$datasx1);
        $datagz["url"]='http://t.cn/RpFZBpR';
        $datagz["pic"]='/template/mac/images/tv/gz.png';
        $datagz["name"]='贵州卫视';
        array_push($arr,$datagz);
        $datasz["url"]='http://t.cn/RpFZgD6';
        $datasz["pic"]='/template/mac/images/tv/sz.png';
        $datasz["name"]='深圳卫视';
        array_push($arr,$datasz);

        $datajl["url"]=' http://t.cn/RpFwP3U';
        $datajl["pic"]='/template/mac/images/tv/jl.png';
        $datajl["name"]='吉林卫视';
        array_push($arr,$datajl);
        $dataln["url"]='http://t.cn/RpFwZUV';
        $dataln["pic"]='/template/mac/images/tv/ln.png';
        $dataln["name"]='辽宁卫视';
        array_push($arr,$datajl);
        $datasc["url"]='http://t.cn/RpFw2zU';
        $datasc["pic"]='/template/mac/images/tv/sc.png';
        $datasc["name"]='四川卫视';
        array_push($arr,$datasc);


        $res['ys']=$arrys;
        $res['ws']=$arr;
        CommonUtil::jsonResult('200',"获取成功",$res);

    }

}
