var $mbox;
var $opurl;
$(document).ready(function(){
	$(".boxa").live("click",function(){
		sxjlid=$(this).attr("xjlid");
		$("#rwin").attr("src",$opurl+"&sxjlid="+sxjlid);
		$mbox.close();
	});
	$("a[href!='javascript:void(0);'][target!='_blank']").attr("target","rwin");
	$("a[box]").live("click",function(){
		$opurl=$(this).attr("href");
		var ext1;
		var ibox=$(this).attr("box");
		if(ibox==1){
			ext1="keys";
		}else{
			if(ibox==2){
				ext1="user";
			}else{
				ext1="all";
			}
		}
		//alert(ext1);
	    $mbox = $.msgbox({
			height:300,
			width:800,
			content:{type:'ajax',content:'./inc/softlist.php?ext1='+ext1},
			title: '请选择要查询的软件',
			closeIcon:{type:'icon',content:'..'+ksreg_public_jspath+'/images/close.gif'},
			animation:0,
			drag:false
		});
		return false;   
	});
	$("li[f=1]").live("mouseover",function(){$(this).removeClass("li1").addClass("li2");}).live("mouseout",function(){$(this).removeClass("li2").addClass("li1");});
	$("li[class^='snav']").hover(function(){$(this).removeClass("snav1").addClass("snav2");	},function(){$(this).removeClass("snav2").addClass("snav1");});
	
	$("li[s]").hover(
		function (){
			$(this).children("ul").show();
			var cc2=$(this).children().children().filter(":last-child").offset();
			//alert(cc2.top + "," + cc2.left);
			$("#fbg").css("left",(cc2.left-1)+"px");
			$("#fbg").css("height",(cc2.top-21)+"px");
		},
		function (){
            $("#fbg").css("left","-200px");
			$(this).children("ul").hide();
		}
	);


	$("#synclog").bind("mouseout",function(){
			$(this).hide(1000);
	});
    
	$("li[s] li").hover(function (){$(this).css("background","url(.."+ksreg_public_jspath+"/images/xlbg.gif)"); },function (){$(this).css("background","url(.."+ksreg_public_jspath+"/images/icon2.gif) no-repeat 5px 7px")});
	$("#rwin").height(document.documentElement.clientHeight-90);
	$("img[src$='logo.jpg']").attr('alt','Author keke. All Rights Reserved');
	window.setInterval("reinitIframe()", 500);
});
function reinitIframe(){
	var hvmdis=$("#hvm").attr("dis");
	//alert(hvmdis);
	if(hvmdis=="1"){
		if($("#rwin").height()!=(document.documentElement.clientHeight-90)){
			$("#rwin").height(document.documentElement.clientHeight-90);
		}
	}else{
		if($("#rwin").height()!=(document.documentElement.clientHeight-60)){
			$("#rwin").height(document.documentElement.clientHeight-60);
		}
	}
}

function sTime(){var d = new Date();return(d.getTime())}