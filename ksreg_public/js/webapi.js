
	$(document).ready(function(){
		var opapi="reguser";
		var issubmit=0;
		$("#reguser").show();
		$(".menu").bind("click",function(){
			opapi=$(this).attr("t");			
			$(".subtable").hide();
			$("td[t]").removeClass("menu2");
			$(this).addClass("menu2");
			$("#"+opapi).show();
		});	
		$(".vimg").live("click",function(){
			$(this).attr("src","./inc/code.php?"+sTime());
		});
		$("#k1,#k2").bind("click",function(){
			$(this)[0].select();
		
		});
		$("#send").bind("click",function(){
			var othis=$(this);
			var url;
			issubmit=1;
			var ia=["u11","u12","p111","p112","p121","p122","k1","u21","u22","k2","u31","p31","u32","u33","u41","p41","p42","p43","k5","xjlcode","vcode"];
			var senda=new Array(20);
			for(var i=0;i<21;i++){
				eval("var s" + ia[i] + "=$.trim($(\"#"+ia[i]+"\").val());senda["+i+"]=s" + ia[i] + ";");
				//eval("s"+ia[i] + "=$.trim(s"+ia[i]+")");
			}

			var errmsg="";
			var iserr=false;
			
			var k=/^[A-Z0-9]{16}(\|[A-Z0-9]{16})*$/g;
			if(opapi=="reguser"){
				if(su11.length<3){
					iserr=true;
					errmsg=errmsg+"用户名长度小于3\r\n";
				}
				if(sp111.length<8){
					iserr=true;
					errmsg=errmsg+"超级密码长度小于8\r\n";
				}
				if(sp111!=sp112){
					iserr=true;
					errmsg=errmsg+"两次输入的超级密码不相同\r\n";
				}
				if(sp121.length<5){
					iserr=true;
					errmsg=errmsg+"登陆密码长度小于5\r\n";
				}
				if(sp121!=sp122){
					iserr=true;
					errmsg=errmsg+"两次输入的登陆密码不相同\r\n";
				}
				if(sk1.length!=0){	
					if(!k.test(sk1)){
						iserr=true;
						errmsg=errmsg+"卡号只能包函[A-Za-z0-9]，每张卡号16位，并且要以|号分隔\r\n";
					}				
				}
			}else if(opapi=="recharge1"){
				if(su21.length<3){
					iserr=true;
					errmsg=errmsg+"用户名长度小于3\r\n";
				}
				if(su21!=su22){
					iserr=true;
					errmsg=errmsg+"两次输入的用户名不相同\r\n";
				}
				if(!k.test(sk2)){
					iserr=true;
					errmsg=errmsg+"卡号只能包函[A-Za-z0-9]，每张卡号16位，并且要以|号分隔\r\n";
				}
			
			}else if(opapi=="edituser1"){
				if(su31.length<3 || su32.length<3){
					iserr=true;
					errmsg=errmsg+"用户名或转出用户长度小于3\r\n";
				}
				if(sp31.length<8 ){
					iserr=true;
					errmsg=errmsg+"超级密码长度小于8\r\n";
				}
				if(su32!=su33){
					iserr=true;
					errmsg=errmsg+"两次输入的转出用户名不相同\r\n";
				}
			
			}else if(opapi=="edituser2"){
				if(su41.length<3){
					iserr=true;
					errmsg=errmsg+"用户名长度小于3\r\n";
				}
				if(sp41.length<8 ){
					iserr=true;
					errmsg=errmsg+"超级密码长度小于8\r\n";
				}
				if(sp42!=sp43){
					iserr=true;
					errmsg=errmsg+"两次输入的新密码不相同\r\n";
				}			
			}else if(opapi=="viewkey"){
				if(sk5.length<3){
					iserr=true;
					errmsg=errmsg+"要查询的用户名长度小于3\r\n";
				}
			}
			if(svcode.length!=4){
				iserr=true;
				errmsg=errmsg+"请输入验证码\r\n";
			}
			if(iserr){
				alert(errmsg);
				return false;
			}

			if(opapi=="reguser" || opapi=="recharge1" || opapi=="edituser1" || opapi=="edituser2" || opapi=="viewkey" ){			

				for(var i=0;i<21;i++){
					eval("senda["+i+"]=encodeURIComponent(s" + ia[i] + ");");					
					if(senda[i].indexOf("%3A%7C%3A")>=0){
						alert("任何信息中都不允许有:|:字串\r\n");
						return false;
					}	
				}
				var sendstr=senda.join(":|:");
				var url="apisave.php?rand="+sTime()+"&webget="+opapi+":|:"+sendstr;
				othis.attr("disabled","disabled");
				//top.location=url;
				//return false;
				$.ajax({type: "GET",url: url+"&rnad="+sTime(),
					success: function(msg){
						alert(msg);
						othis.attr("disabled","");
						$(".vimg").attr("src","./inc/code.php?"+sTime());	
					},error:function(ajaxobj){
						alert("AJAX出错信息："+ajaxobj.status);
					}
				});
			
			}else{
				alert("接口名错误！");
			}	
		});
	});
	function sTime(){var d,s;d = new Date();s=d.getSeconds(); return(s)}