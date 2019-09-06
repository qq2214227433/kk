        function sTime2(){
		   var d,s;
		   d = new Date();
		   s=d.getSeconds();
		   return(s)
		}
					

        $(document).ready(function(){					
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
					content:{type:'confirm', content: '确认删除该充值卡?'},
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