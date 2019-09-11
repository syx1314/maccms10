<?php

namespace app\index\controller;


use app\common\util\CommonUtil;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/10 0010
 * Time: 下午 1:53
 */
class Api extends Base
{

    public function __construct()
    {
    }

    public function zhibo(){
        $arrys=array();

        //央视
        $dataCCTV1["url"]='http://ivi.bupt.edu.cn/hls/cctv1hd.m3u8';
        $dataCCTV1["pic"]='/template/mac/images/tv/c1.png';
        $dataCCTV1["name"]='CCCTV 1';
        array_push($arrys,$dataCCTV1);
        $dataCCTV2["url"]='http://ivi.bupt.edu.cn/hls/cctv2.m3u8';
        $dataCCTV2["pic"]='/template/mac/images/tv/c2.png';
        $dataCCTV2["name"]='CCCTV 2';
        array_push($arrys,$dataCCTV2);
        $dataCCTV3["url"]='http://ivi.bupt.edu.cn/hls/cctv3hd.m3u8';
        $dataCCTV3["pic"]='/template/mac/images/tv/c3.png';
        $dataCCTV3["name"]='CCCTV 3';
        array_push($arrys,$dataCCTV3);
        $dataCCTV4["url"]='http://ivi.bupt.edu.cn/hls/cctv4.m3u8';
        $dataCCTV4["pic"]='/template/mac/images/tv/c4.png';
        $dataCCTV4["name"]='CCCTV 4';
        array_push($arrys,$dataCCTV4);
        $dataCCTV5["url"]='http://ivi.bupt.edu.cn/hls/cctv5phd.m3u8';
        $dataCCTV5["pic"]='/template/mac/images/tv/c5.png';
        $dataCCTV5["name"]='CCCTV 5';
        array_push($arrys,$dataCCTV5);
        $dataCCTV6["url"]='http://ivi.bupt.edu.cn/hls/cctv6hd.m3u8';
        $dataCCTV6["pic"]='/template/mac/images/tv/c6.png';
        $dataCCTV6["name"]='CCCTV 6';
        array_push($arrys,$dataCCTV6);
        $dataCCTV7["url"]='http://ivi.bupt.edu.cn/hls/cctv7.m3u8';
        $dataCCTV7["pic"]='/template/mac/images/tv/c7.png';
        $dataCCTV7["name"]='CCCTV 7';
        array_push($arrys,$dataCCTV7);
        $dataCCTV8["url"]='http://ivi.bupt.edu.cn/hls/cctv8hd.m3u8';
        $dataCCTV8["pic"]='/template/mac/images/tv/c8.png';
        $dataCCTV8["name"]='CCCTV 8';
        array_push($arrys,$dataCCTV8);
        $dataCCTV9["url"]='http://ivi.bupt.edu.cn/hls/cctv9.m3u8';
        $dataCCTV9["pic"]='/template/mac/images/tv/c9.png';
        $dataCCTV9["name"]='CCCTV 9';
        array_push($arrys,$dataCCTV9);
        $dataCCTV10["url"]='http://ivi.bupt.edu.cn/hls/cctv10.m3u8';
        $dataCCTV10["pic"]='/template/mac/images/tv/c10.png';
        $dataCCTV10["name"]='CCCTV 10';
        array_push($arrys,$dataCCTV10);
        $dataCCTV11["url"]='http://ivi.bupt.edu.cn/hls/cctv11.m3u8';
        $dataCCTV11["pic"]='/template/mac/images/tv/c11.png';
        $dataCCTV11["name"]='CCCTV 11';
        array_push($arrys,$dataCCTV11);
        $dataCCTV12["url"]='http://ivi.bupt.edu.cn/hls/cctv12.m3u8';
        $dataCCTV12["pic"]='/template/mac/images/tv/c12.png';
        $dataCCTV12["name"]='CCCTV 12';
        array_push($arrys,$dataCCTV12);
        $dataCCTV13["url"]='http://ivi.bupt.edu.cn/hls/cctv13.m3u8';
        $dataCCTV13["pic"]='/template/mac/images/tv/c13.png';
        $dataCCTV13["name"]='CCCTV 13';
        array_push($arrys,$dataCCTV13);
        $dataCCTV14["url"]='http://ivi.bupt.edu.cn/hls/cctv14.m3u8';
        $dataCCTV14["pic"]='/template/mac/images/tv/c14.png';
        $dataCCTV14["name"]='CCCTV 14';
        array_push($arrys,$dataCCTV14);
        $dataCCTV15["url"]='http://ivi.bupt.edu.cn/hls/cctv15.m3u8';
        $dataCCTV15["pic"]='/template/mac/images/tv/c15.png';
        $dataCCTV15["name"]='CCCTV 15';
        array_push($arrys,$dataCCTV15);

        $arr=array();
        //卫视频道
        $datahn["url"]='http://ivi.bupt.edu.cn/hls/hunanhd.m3u8';
        $datahn["pic"]='/template/mac/images/tv/hn.png';
        $datahn["name"]='湖南卫视';
        array_push($arr,$datahn);

        $datazj["url"]='http://ivi.bupt.edu.cn/hls/zjhd.m3u8';
        $datazj["pic"]='/template/mac/images/tv/zj.png';
        $datazj["name"]='浙江卫视';
        array_push($arr,$datazj);

        $datajs["url"]='http://ivi.bupt.edu.cn/hls/jshd.m3u8';
        $datajs["pic"]='/template/mac/images/tv/js.png';
        $datajs["name"]='江苏卫视';
        array_push($arr,$datajs);

        $datadf["url"]='http://ivi.bupt.edu.cn/hls/dfhd.m3u8';
        $datadf["pic"]='/template/mac/images/tv/df.png';
        $datadf["name"]='东方卫视';
        array_push($arr,$datadf);

        $databj["url"]='http://ivi.bupt.edu.cn/hls/btv1hd.m3u8';
        $databj["pic"]='/template/mac/images/tv/bj.png';
        $databj["name"]='北京卫视';
        array_push($arr,$databj);

        $dataah["url"]='http://ivi.bupt.edu.cn/hls/ahhd.m3u8';
        $dataah["pic"]='/template/mac/images/tv/ah.png';
        $dataah["name"]='安徽卫视';
        array_push($arr,$dataah);

        $datasd["url"]='http://ivi.bupt.edu.cn/hls/sdhd.m3u8';
        $datasd["pic"]='/template/mac/images/tv/sd.png';
        $datasd["name"]='山东卫视';
        array_push($arr,$datasd);

        $datahenan["url"]='http://ivi.bupt.edu.cn/hls/hntv.m3u8';
        $datahenan["pic"]='/template/mac/images/tv/ha.png';
        $datahenan["name"]='河南卫视';
        array_push($arr,$datahenan);
        $datajx["url"]='http://ivi.bupt.edu.cn/hls/jxtv.m3u8';
        $datajx["pic"]='/template/mac/images/tv/jx.png';
        $datajx["name"]='江西卫视';
        array_push($arr,$datajx);
        $datahlj["url"]='http://ivi.bupt.edu.cn/hls/hljhd.m3u8';
        $datahlj["pic"]='/template/mac/images/tv/hlj.png';
        $datahlj["name"]='黑龙江卫视';
        array_push($arr,$datajx);
        $datagd["url"]='http://ivi.bupt.edu.cn/hls/gdhd.m3u8';
        $datagd["pic"]='/template/mac/images/tv/gd.png';
        $datagd["name"]='广东卫视';
        array_push($arr,$datagd);
        $datatj["url"]='http://ivi.bupt.edu.cn/hls/tjhd.m3u8';
        $datatj["pic"]='/template/mac/images/tv/tj.png';
        $datatj["name"]='天津卫视';
        array_push($arr,$datatj);
        $datahb["url"]='http://ivi.bupt.edu.cn/hls/hbhd.m3u8';
        $datahb["pic"]='/template/mac/images/tv/hb.png';
        $datahb["name"]='湖北卫视';
        array_push($arr,$datahb);
        $dataheb["url"]='http://ivi.bupt.edu.cn/hls/hebtv.m3u8';
        $dataheb["pic"]='/template/mac/images/tv/heb.png';
        $dataheb["name"]='河北卫视';
        array_push($arr,$dataheb);
        $datacq["url"]='http://ivi.bupt.edu.cn/hls/cqhd.m3u8';
        $datacq["pic"]='/template/mac/images/tv/cq.png';
        $datacq["name"]='重庆卫视';
        array_push($arr,$datacq);
        $datadn["url"]='http://ivi.bupt.edu.cn/hls/dntv.m3u8';
        $datadn["pic"]='/template/mac/images/tv/dn.png';
        $datadn["name"]='东南卫视';
        array_push($arr,$datadn);
        $datasx1["url"]='http://ivi.bupt.edu.cn/hls/sxrtv.m3u8';
        $datasx1["pic"]='/template/mac/images/tv/sx1.png';
        $datasx1["name"]='山西卫视';
        array_push($arr,$datasx1);
        $datagz["url"]='http://ivi.bupt.edu.cn/hls/gztv.m3u8';
        $datagz["pic"]='/template/mac/images/tv/gz.png';
        $datagz["name"]='贵州卫视';
        array_push($arr,$datagz);
        $datasz["url"]='http://ivi.bupt.edu.cn/hls/sztv.m3u8';
        $datasz["pic"]='/template/mac/images/tv/sz.png';
        $datasz["name"]='深圳卫视';
        array_push($arr,$datasz);

        $datajl["url"]='http://ivi.bupt.edu.cn/hls/jltv.m3u8';
        $datajl["pic"]='/template/mac/images/tv/jl.png';
        $datajl["name"]='吉林卫视';
        array_push($arr,$datajl);
        $dataln["url"]='http://ivi.bupt.edu.cn/hls/lnhd.m3u8';
        $dataln["pic"]='/template/mac/images/tv/ln.png';
        $dataln["name"]='辽宁卫视';
        array_push($arr,$datajl);
        $datasc["url"]='http://ivi.bupt.edu.cn/hls/sctv.m3u8';
        $datasc["pic"]='/template/mac/images/tv/sc.png';
        $datasc["name"]='四川卫视';
        array_push($arr,$datasc);


        $res['ys']=$arrys;
        $res['ws']=$arr;
        CommonUtil::jsonResult('200',"获取成功",$res);

    }
}