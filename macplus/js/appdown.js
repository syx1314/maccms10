$(function() {
if(MAC.UserAgent.mobile){
var appdw1 = '<div class="layui-waper"><div class="layer-iframe"><div class="layer-content layer_notice"><a href="javascript:;" class="close">跳过</a><a href="javascript:;" class="link">打开APP</a></div></div></div>';
(function() {
    if (!isWeiXin()) {
        if ($.cookie('appdw1') == null) {
            $('body').append(appdw1);
            setTimeout(function() {
				$("body").addClass("hidden");
			},
            10);
        }
    }
    function isWeiXin() {
        var ua = window.navigator.userAgent.toLowerCase();
        if (ua.match(/MicroMessenger/i) == 'micromessenger') {
            return true;
        } else {
            return false;
        }
    }
})();
}else{
var appdw2 = '<div class="layer-shade"></div><div class="layui-layer"><div class="layer-wraper anim-scale"><div class="layer-poster"><a href="/" target="_blank"></a></div><div class="layer-content"><span class="layer-title">扫码访问</span><p>打开手机微信扫一扫即可打开手机版</p><div class="code"></div><a class="link" href="javascript:;"  target="_blank">参观一下</a><a class="close" href="javascript:;"></a></div></div></div>';
(function() {
    if (!isWeiXin()) {
        if ($.cookie('appdw2') == null) {
            $('body').append(appdw2);
            setTimeout(function() {
            },
            500);
        }
    }
    function isWeiXin() {
        var ua = window.navigator.userAgent.toLowerCase();
        if (ua.match(/MicroMessenger/i) == 'micromessenger') {
            return true;
        } else {
            return false;
        }
    }
})();
 }
});
$(document).ready(function(){
  $(".layui-waper a").click(function(){ 
    $(".layui-waper").remove();
	$("body").removeClass("hidden");
	$.cookie('appdw1', 'the_value', { expires: 1, path: '/' });
  }); 
   $(".layui-layer a").click(function(){ 
	$(".layer-shade").remove();
	$(".layui-layer").remove();
	$.cookie('appdw2', 'the_value', { expires: 1, path: '/' });
  }); 
});


/* 
$(function() {
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
if(window != window.top){window.top.location.href = window.location.href;}
});

function fuckyou(){
     window.close(); 
     window.location="http://wpa.qq.com/msgrd?v=3&uin=2691099881&site=qq&menu=yes"; 
}
  function ck() {
    console.profile();
    console.profileEnd();
    
    if(console.clear) { console.clear() };
                        if (typeof console.profiles =="object"){
    return console.profiles.length > 0;
                        }
}
function hehe(){
if( (window.console && (console.firebug || console.table && /firebug/i.test(console.table()) )) || (typeof opera == 'object' && typeof opera.postError == 'function' && console.profile.length > 0)){
  fuckyou();
}
if(typeof console.profiles =="object"&&console.profiles.length > 0){
fuckyou();
}
}
hehe();
window.onresize = function(){
if((window.outerHeight-window.innerHeight)>200)
   fuckyou();
}
 */

 
/* 
$(function() {
var system = {};
var p = navigator.platform;
var u = navigator.userAgent;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
if (system.win || system.mac || system.xll) {//如果是PC转   
    if (u.indexOf('Windows Phone') > -1) {  //win手机端  
    }else {
       window.location.href = "https://mp.weixin.qq.com/s/B7_JJs7vT0dvCRmGz_oBFA";
    }
}  
}); */