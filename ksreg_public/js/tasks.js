$(document).ready(function(){
	reinitsyncimg();
	window.setInterval("reinitsyncimg()", 10000);
});

function reinitsyncimg(){
	$.ajax({
		type: "get",
		url: "start_tasks.php?ajax=yes",
		cache: false,
		error: function(msg){
			alert("error: " + msg);
		},
		success: function(msg){
			var ss;
			$("#synclog").html(msg);
			ss=msg.split("|");
			if(ss[0]=="running"){
				$("#taskimg").attr('src','./images/green.gif');
				$("#taskimg").attr('title',ss[1]);
			}else if(ss[0]=="sqlerr"){
				$("#taskimg").attr('src','./images/red.gif');
				$("#taskimg").attr('title',ss[1]);				
			}else if(ss[0]=="closeing"){
				$("#taskimg").attr('src','./images/yellow.gif');
				$("#taskimg").attr('title','系统任务正在关闭,'+ss[1]);				
			}else if(ss[0]=="nowstart"){
				$("#taskimg").attr('title','开始启动,'+ss[1]);
				$("#stwin").attr('src','start_tasks.php?e='+sTime());				
			}
		}
	}); 
}

function sTime(){
   var d,s;
   d = new Date();
   s=d.getSeconds();
   return(s)
}