$(document).ready(function(){
	$("a[target='rwin']").live("click",function(){
		$("#l2 li").attr("f",1).removeClass("li2").addClass("li1");
		$("#l1 li").attr("f",1).removeClass("li2").addClass("li1");
		$("#l2 li a[od='"+$(this).attr('od')+"']").parent().remove();
		if($("#l2 li").length>10)$("#l2 li:last-child").remove();
		$("#l2").prepend("<li class=li2 f='2'><a href='" + $(this).attr("href") + "' od='" + $(this).attr("od") + "' target='rwin'>" + $(this).html() + "</a></li>");    
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
    
	$("li[s] li").hover(function (){$(this).css("background","url(.."+ksreg_public_jspath+"/images/xlbg.gif)"); },function (){$(this).css("background","url(.."+ksreg_public_jspath+"/images/icon2.gif) no-repeat 5px 7px")});
});


//表格行鼠标划过时状态效果
$(document).ready(function(){
	$("tr[class^='tb_tr']").hover(
		function (){
			$(this).addClass("tb_tr0");
		},
		function (){
			$(this).removeClass("tb_tr0");
		}
	);
	$("#octips").toggle(
		function () {
			$("#tips").show();
		},
		function () {
			$("#tips").hide();
		}
	); 
	$("img[src$='out.gif']").hover(
		function () {
			$(this).attr("src",$(this).attr("src").replace(/out.gif/,'in.gif'));
		},
		function () {
			$(this).attr("src",$(this).attr("src").replace(/in.gif/,'out.gif'));
		}
	).css("cursor","pointer"); 
	
	$("img[type='submit']").bind("click",function(){
		$(this).prev().click();
	});
	$("img[type='return']").bind("click",function(){
		history.go(-1);
	});
	
});