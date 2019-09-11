$(document).ready(function($){
    var recente1=$.cookie("recente1");
    var len=0;
    var canadd=true;
    // $.cookie("recente1",null,{expires:-1,path: '/'});
    // alert(recente1);
    if(recente1){
        recente1 = eval("("+recente1+")"); 
        len=recente1.length;
        $(recente1).each(function(){
            if(sea_name==this.sea_name){   //已记录则修改
                canadd=false;
                var json="[";
                $(recente1).each(function(i){
                    var temp_name,temp_url,temp_part;
                    if(this.sea_name==sea_name){
                        temp_name=sea_name;
                        temp_url=sea_url;
                        temp_part=sea_part;
                    }else{
                        temp_name=this.sea_name;
                        temp_url=this.sea_url; 
                        temp_part=this.sea_part;
                    }
                    json+="{\"sea_name\":\""+temp_name+"\",\"sea_url\":\""+temp_url+"\",\"sea_part\":\""+temp_part+"\"}";
                    if(i!=len-1)
                        json+=",";
                })
                json+="]";
                $.cookie("recente1",json,{path:"/",expires:(2)});
                return false;
            }
        });
    }
    if(canadd){   //无记录则添加
        var json="[";
        var start=0;
        var isfirst="]";
        isfirst=!len?"]":",";
        json+="{\"sea_name\":\""+sea_name+"\",\"sea_url\":\""+sea_url+"\",\"sea_part\":\""+sea_part+"\"}"+isfirst;
        if(len>3)
            len-=1;
        for(i=0;i<len-1;i++){
            json+="{\"sea_name\":\""+recente1[i].sea_name+"\",\"sea_url\":\""+recente1[i].sea_url+"\",\"sea_part\":\""+recente1[i].sea_part+"\"},";
        }
        if(len>0){
            json+="{\"sea_name\":\""+recente1[len-1].sea_name+"\",\"sea_url\":\""+recente1[len-1].sea_url+"\",\"sea_part\":\""+recente1[len-1].sea_part+"\"}]";
        }
        $.cookie("recente1",json,{path:"/",expires:(2)});
    }
})