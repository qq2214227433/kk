$(document).ready(function(){
	$("a[box]").live("click",function(){
		$opurl=$(this).attr("href");
		var ext1;
		var ibox=$(this).attr("box");
		ext1="all";
		if(ibox==1){
			ext1="keys";
		}
		if(ibox==2){
			ext1="user";
		}

	    $mbox = $.msgbox({
			height:300,
			width:800,
			content:{type:'ajax',content:'agentsoftlist.php?userid='+fuserid+'&ext1='+ext1},
			title: '请选择要查询的软件',
			closeIcon:{type:'icon',content:'..'+ksreg_public_jspath+'/images/close.gif'},
			animation:0,
			drag:false
		});
		return false;   
	});
	$(".boxa").live("click",function(){
		sxjlid=$(this).attr("xjlid");
		top.location=$opurl+"&sxjlid="+sxjlid;
	});
	$(".vimg").live("click",function(){
		$(this).attr("src",".."+ksreg_public_jspath+"/images/code.php?"+sTimek());
	});
});

function sTimek(){var d = new Date(); return(d.getTime());}