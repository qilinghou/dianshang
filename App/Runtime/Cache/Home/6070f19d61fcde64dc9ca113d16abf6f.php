<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title></title>
<link rel="icon" href="/favicon.png">
<link href="/tongmeng/Public/Home/Css/m_base.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_style.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_slider.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/m_flex.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/new_order_member.css" rel="stylesheet" type="text/css">
<link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">

<script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script><script src="/tongmeng/Public/Home/Js/hm.js"></script><script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script><script type="text/javascript" src="/tongmeng/Public/Home/Js/user.js"></script></head>
<body class="w1200">
<script type="text/javascript">
var isWidescreen=screen.widtd>=1280;
if (isWidescreen){document.getElementsByTagName("body")[0].className="w1200";}
</script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-1.7.2.min.js"></script>
<!--[if IE 6]>
<div id="yellowtip" style="widtd: 100%; background-color: rgb(254, 246, 227); border-top-widtd: 1px; border-bottom-widtd: 1px; border-style: solid none; border-top-color: rgb(229, 205, 150); border-bottom-color: rgb(229, 205, 150); height: 33px; min-widtd: 920px; z-index: 99999; background-position: initial initial; background-repeat: initial initial;">
<div style="margin:0 auto;widtd:900px;line-height:33px;text-align:center;color:#82654D;">温馨提示：尊敬的用户，现在检测到您正在使用IE6浏览器。为了确保您的购物安全和更好的用户体验，请<a class="se6_download" style="color:#1C79A1" href="http://chrome.360.cn/" target="_blank">下载360极速浏览器</a>或者升级更高版本的IE浏览器</div>
<div id="yellowtipclose" style="display:none;"></div>
</div>
<![endif]-->
<?php echo W('Skins/head');?>
<div class="block clearfix">
LOCATIONG : <a href="<?php echo U('Index/index');?>">首页</a>
</div>
</div>
<div class="blank5"></div>  
  
  <div class="AreaR">
    <div class="box" style="width:800px;margin-left:-100px;;">

      <h5><span>我的应聘表</span></h5>
　
  <div class="blank"></div>
   <div style="width:800px;align:center;margin:7px;">
    <form action="<?php echo U('Job/jobinsert');?>" method="post" align="center" >
       <!-- <div >
            <div style="margin-left:-200px;">
                应聘职位:
                    <input type="text" name="office">                                 
            </div><br/>
            <div  style="margin-left:-200px;"> 
                姓   名:
                <input type="text" class="small" name="name">
            </div><br/>            
           
            <div style="margin-left:-200px;">
               联系电话:
                <input type="text" name="telephone"> 
            </div><br/>

            <div>
               <div style="margin-left:-450px;">自我介绍:</div>
                <textarea name="description" cols='100' rows='30' style="width:500px;height:300px"></textarea>               
            </div><br/>
        
              <div style="margin-left:0px;">
                  <input type="hidden" name="time" value="<?php echo time() ?>">
                  <input type="submit" value="提交" >&nbsp;
                  <input type="reset" value="重置">

              </div>
        </div> 
   -->    
          <table border='0' width='98%' bordercolor='green' cellpadding='0' cellspacing='0'>
              <tr>
                  <td>应聘职位:</td>
                  <td colspan='2'>
                    <input type="text" name="office" style="width:100%;">
                  </td>
              </tr>
              <tr>
                  <td>姓名:</td>
                  <td colspan='2'>
                    <input type="text" class="small" name="name" style="width:100%;">
                  </td>
              </tr>
              <tr>
                  <td>联系电话</td>
                  <td colspan='2'>
                    <input type="text" name="telephone" style="width:100%;">
                  </td>
              </tr>
              <tr><td colspan='3'>&nbsp;</td></tr>
              <tr>
                  <td colspan='3'><font style='font-size:20px;'><b>自我介绍:</b></font></td>
              </tr>
              <tr>
                  <td colspan='3'>
                    <textarea name="description" cols='100' rows='30' style="width:100%;height:300px">
                    </textarea>
                  </td>
              </tr>
              <tr>
                  <td colspan='3'>
                    <input type="hidden" name="time" value="<?php echo time() ?>">
                    <input type="submit" value="提交" >
                    <input type="reset" value="重置">
                  </td>
              </tr>
          </table>
      </form>
    
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
     
     </div><br/>
    </div>
  </div>
  
</div>
<div class="blank"></div>
<?php echo W('Skins/bottom');?>
<script type="text/javascript">
var msg_title_empty = "留言标题为空";
var msg_content_empty = "留言内容为空";
var msg_title_limit = "留言标题不能超过200个字";
</script>

</body></html>