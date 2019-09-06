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

        $(".regkey").bind("mousedown",function(){var kkdd=this.innerText;if(window.clipboardData.setData("text",this.innerText)){$.msgbox({width:300,height:120,content:{type:"信息提示", content:"注册卡号" + kkdd + "已复制到剪贴板！"},autoClose:2})}});
	
});



/*模似select效果*/
$(document).ready(function() {
	$("#classid").attr("value",$("li[selected=1]").attr("myid"));
	var c=$("li[selected=1]").html();
	$(".myselect li span").html(c==null?"请选择":c);

	$(".myselect li[cansect=0]").css("color","#aaa");
	$(".myselect li ul li").hover(function(){if($(this).attr("cansect")=="0"){$(this).attr("title","不可选择此项")};$(this).css("background","#316AC5").addClass("mshover")},function(){$(this).css("background","").removeClass("mshover")});
	$(".myselect li ul li").bind("click",function(event){
		if($(this).attr("cansect")=="0"){
			return false;
		}
		$(this).parent().prev().text($(this).text());
		$(this).parent().hide();
		var mvalue=$(this).attr("myid");
		var iid=$(this).parent().parent().parent().attr("inputid");
		$("#"+iid).attr("value",mvalue);
		//event.stopPropagation();
	});
	var open=0;
	$(".myselect li ul").each(function(){
		if($(this).height()>200){
			$(this).height(200);
			//alert()overflow-x
			$(this).css("overflow-x","hidden");
			$(this).css("overflow-y","auto");
		}
	});	
	$(".myselect").bind("click",function(){
		if(open==0){
			$(this).children().children().show();
			open=1;
		}
		else{
			$(this).children().children().not(":first").hide();
			open=0;			
		}
	}); 
});




//上传对像
$(document).ready(function(){
	$(".upfile").live("click",function(event){
		var uptype=$(this).attr("uptype");
		var inputname=$(this).attr("inputid");
		var filename=$("#"+inputname).attr("value");
		var ex=event.clientX;
		var ey=event.clientY;
		$("#fullbg").width($("body").width()).height($("body").height()).show().fadeTo("fast", 0.33); 
		$("#pubupdiv").css({width:"300px",height:"65px"}); 
		$("#pubupdiv").css("top",(document.compatMode=="BackCompat"?document.body.scrollTop:document.documentElement.scrollTop)+ey-30);
		$("#pubupdiv").css("left",(document.compatMode=="BackCompat"?document.body.scrollLeft:document.documentElement.scrollLeft)+ex-150);
		var frm_config={
			type: "get",
			url: "../inc/uploaddiv.php?type=" + uptype + "&inputname=" + inputname + "&filename=" + filename ,
			cache: false,
			error: function(msg){
				alert( "error: " + msg );
			},
			success: function(msg){
				$("#pubupdiv").html(msg).show();
			}
		};
		$.ajax(frm_config); 
		
	});
 
	$("#updivclose").live("click",function(){
		$("#pubupdiv").html("").hide();
		$("#fullbg").hide(); 
	});
	$("#updivmax").live("click",function(){
		$("#pubupdiv").css("height","200px");
	});
});