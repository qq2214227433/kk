function CheckAll(form) {for (var i=0;i<form.elements.length;i++) {var e = form.elements[i];if (e.name != 'chkall' & !e.disabled) e.checked = form.chkall.checked;}}	
function chkid(){
	var nid="";
	$("input[name='id[]']:checked").each(function(i){
		if(i==0){
			nid=$(this).attr("value");
		}else{
			nid=nid+","+$(this).attr("value");
			//nid=nid+",'"+$(this).attr("value")+"'";
		}
	});
	return nid;	
}
$(document).ready(function(){
	$(".dela").bind("click",function(){if(confirm("确认删除该内容?")){return true;}else{return false;}});
});

function chkfromlist(){

  if(chkid()!=""){
    if($("#op").attr("value").indexOf("del")>-1){
		$.msgbox({
			height:120,
			width:350,
			animation:0,
			content:{type:'confirm', content: '确认批量删除数据？'},
			onClose:function(v){
				if(v)
					$("#f2").submit();
			}
		});
		return false;
    }
    return true;
  }else{
    $.msgbox({width:500,height:120,title:'出错',content:{type:'alert', content:'请勾选要批量操作的记录'}});
    return false;
  }
/*
  if(chkid()!=""){
    if($("#op").attr("value").indexOf("del")>-1){
      return confirm("确认删除数据？");
    }
    return true;
  }else{
    alert("请勾选要批量操作的记录");
    return false;
  }
 */
}

