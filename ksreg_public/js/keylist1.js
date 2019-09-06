        function sTime2(){
		   var d,s;
		   d = new Date();
		   s=d.getSeconds();
		   return(s)
		}
        $(document).ready(function(){
            $(".tb_tr1,.tb_tr2").hover(function (){
				$("#op").css('visibility','hidden');
				$(this).children(":first-child").children("span").children("div").show();
			},function (){
				$("#op").css('visibility','visible');
				$(this).children(":first-child").children("span").children("div").hide();
			});

            $(".saveintro").bind("click",function(){
				var kid=$(this).attr("kid");
				var objtext0=$(this).next();
				var pdata="id="+$("#id"+kid).val()+"&ext1="+$("#ext1"+kid).val()+"&dayactivetimes="+$("#dayactivetimes"+kid).val()+"&int1="+$("#int1"+kid).val()+"&ext2="+$("#ext2"+kid).val()+"&v7ext1="+$("#v7ext1"+kid).val()+"&cpassword="+$("#cpassword"+kid).val()+"&ktname="+gkeyt_ext+"&intro="+$("#intro"+kid).val();
				$.ajax({type: "POST",url: "?action=saveintro&rand="+sTime2(),data:pdata,
				success: function(msg){
					if(msg=="ok"){
						$("#tdext1"+kid).html($("#ext1"+kid).val());
						$("#tdint1"+kid).html($("#int1"+kid).val());
						$("#tddayactivetimes"+kid).html($("#dayactivetimes"+kid).val());
						objtext0.fadeIn("fast"); objtext0.text("保存成功！");
						objtext0.fadeOut(2000);
					}else{
						$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
					} },
				error:function(ajaxobj){
					$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
				}}); 
			});
            $(".jsbtn").bind("click",function(){
				var keyid=$(this).attr("kid");
				var keyaddtime=$("#js"+keyid).attr("value");
				$.getScript("?action=keyaddtime&ktname="+gkeyt_ext+"&keyid=" + keyid + "&keyaddtime=" + keyaddtime);
			});
			$("input[gl]").keyup(function(){this.value=this.value.replace(/[^A-Za-z0-9]/g,'');});
			$("input[name='int1']").keyup(function(){this.value=this.value.replace(/[^0-9]/g,'');});
					
            $("a[ac='jb']").bind("click",function(){
				var ohref=$(this).attr("ohref");
				var othis=$(this);
				//alert(ohref+"&ajax=1&rand="+sTime2());
				$.ajax({type: "GET",url: ohref+"&ajax=1&rand="+sTime2(),
					success: function(msg){
						if(msg=="ok"){
							$.msgbox({width:300,height:120,content:{type:'alert', content:'解绑成功'},animation:0,drag:false,autoClose:2});
						}else{
							$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
						}
					},error:function(ajaxobj){
						$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
					}
				});return false;
			});
					
            $("a[ac='djd']").bind("click",function(){
				var othis=$(this);
				var ohref1=$(this).attr("ohref1");
				var ohref2=$(this).attr("ohref2");
				var otext=$(this).text();
				var ohref3=ohref2;
				var rtext="冻结";
				if(otext=="冻结"){
					ohref3=ohref1;
					rtext="<span style='color:#f00'>解冻</span>";
				}

				$.ajax({type: "GET",url: ohref3+"&ajax=1&rand="+sTime2(),
					success: function(msg){
						if(msg=="ok"){
							//alert(otext+"成功");
							othis.html(rtext);
						}else{
							$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
						}
					},error:function(ajaxobj){
						$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
					}
				});return false;
			});
					
            $("a[ac='del']").bind("click",function(){
				var fthis=$(this).parent().parent(); 				
				
				var ohref=$(this).attr("ohref");
				$.msgbox({
					height:120,
					width:250,
					animation:0,
					content:{type:'confirm', content: '确认删除该用户?'},
					onClose:function(v){
						if(v){
								$.ajax({type: "GET",url: ohref+"&ajax=1&rand="+sTime2(),
									success: function(msg){
										if(msg=="ok"){
											//alert("删除成功");
											fthis.html("<td colspan=12>该行数据已被删除</td>"); 
										}else{
											$.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:msg}});
										}
									},error:function(ajaxobj){
										$.msgbox({width:300,height:120,title:'出错',content:{type:'alert', content:'AJAX出错信息：'+ajaxobj.status}});
									}
								});

						}else{
						}
					}
				});
				return false;
			});
		

			$("td[agentid]").bind("mouseover",function(){
				if($(this).attr("get")!=1)
					$.getScript("getagentname.php?agentid="+$(this).attr("agentid"));		
			});	
});