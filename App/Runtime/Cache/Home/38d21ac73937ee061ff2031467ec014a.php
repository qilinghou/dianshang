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
<link href="/tongmeng/Public/Home/Css/style.css" rel="stylesheet" type="text/css">

<script charset="utf-8" src="/tongmeng/Public/Home/Js/v.js"></script>
<script src="/tongmeng/Public/Home/Js/hm.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/transport.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/common.js"></script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/user.js"></script>
</head>
<body class="w1200">
<script type="text/javascript">
var isWidescreen=screen.width>=1280;
if (isWidescreen){document.getElementsByTagName("body")[0].className="w1200";}
</script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript" src="/tongmeng/Public/Home/Js/jquery-1.7.2.min.js"></script>
<!--[if IE 6]>
<div id="yellowtip" style="width: 100%; background-color: rgb(254, 246, 227); border-top-width: 1px; border-bottom-width: 1px; border-style: solid none; border-top-color: rgb(229, 205, 150); border-bottom-color: rgb(229, 205, 150); height: 33px; min-width: 920px; z-index: 99999; background-position: initial initial; background-repeat: initial initial;">
<div style="margin:0 auto;width:900px;line-height:33px;text-align:center;color:#82654D;">温馨提示：尊敬的用户，现在检测到您正在使用IE6浏览器。为了确保您的购物安全和更好的用户体验，请<a class="se6_download" style="color:#1C79A1" href="http://chrome.360.cn/" target="_blank">下载360极速浏览器</a>或者升级更高版本的IE浏览器</div>
<div id="yellowtipclose" style="display:none;"></div>
</div>
<![endif]-->
<?php echo W('Skins/head');?>
<div class="block clearfix"> 
<div class="">

 <div id="ur_here">
LOCATIONG : <a href="<?php echo U('Index/index');?>">首页</a> <code>&gt;</code> 用户中心 
</div>
</div>
<div class="blank5"></div>  
  <div class="AreaL">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox">
        <div class="userMenu">
            <a href="<?php echo U('User/index');?>" class="curs"><img src="/tongmeng/Public/Home/Img/u1.gif"> 欢迎页</a>
            <a href="<?php echo U('User/pwdMod');?>"><img src="/tongmeng/Public/Home/Img/u2.gif">密码修改</a>
            <a href="<?php echo U('User/personalMod');?>"><img src="/tongmeng/Public/Home/Img/u2.gif">个人资料修改</a>
            <a href="<?php echo U('Feekback/myfeekback');?>"><img src="/tongmeng/Public/Home/Img/u6.gif"> 我的反馈</a>
            <a href="<?php echo U('MyOrder/myorder');?>"><img src="/tongmeng/Public/Home/Img/u3.gif"> 我的订单</a>
            <a href="<?php echo U('MyCollect/mycollect');?>"><img src="/tongmeng/Public/Home/Img/u12.gif"> 我的收藏</a>
            <a href="<?php echo U('Histroy/histroy');?>"><img src="/tongmeng/Public/Home/Img/u5.gif">浏览历史</a>
            <a href="<?php echo U('Recharge/recharge');?>"><img src="/tongmeng/Public/Home/Img/u13.gif">充值历史</a>
            <a href="<?php echo U('Address/index');?>"><img src="/tongmeng/Public/Home/Img/u9.gif">收货地址</a>
            <a href="<?php echo U('logout/index');?>" style="background:none; text-align:right; margin-right:10px;"><img src="/tongmeng/Public/Home/Img/bnt_sign.gif"></a>
        </div>      
       </div>
     </div>
    </div>
  </div>
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">                
        <h5><span>添加收货地址</span></h5>
      <div class="blank"></div>
           <form action="<?php echo U('Address/addressInsert');?>" method="post" align="center" >
              <div >
                  <div  style="margin-left:200px;">
                      用户名:
                      <input type="text" class="small" name="name" value="<?php echo ($address['name']); ?>">
                      <span><font style="color:red">名字长度为1-18个字节</font></span>
                  </div><br/>
                  <div style="margin-left:90px;">收货地址:<?php echo ($city); ?></div><br/>
                  <div style="margin-left:100px;">
                   详细地址:<input type="text" name="add" value="<?php echo ($add); ?>" >
                  </div><br/>
                  <div style="margin-left:100px;">               
                     设置为默认地址:<?php echo ($address['defaultaddr']== 0 ? "<input type='radio' name='defaultaddr' value= 0 checked>否 <input type='radio' name='defaultaddr' value= 1 >是" : "<input type='radio' name='defaultaddr' value= 0 >否<input type='radio' name= 'defaultaddr' value= 1 checked>是"); ?>
                  </div><br/>
                   <div style="margin-left:100px;">               
                      邮政编码:<input type="text" name="postcode" value="<?php echo ($address['postcode']); ?>" >
                  </div><br/>
                  <div style="margin-left:100px;" id="extend_field5i">
                      联系电话:&nbsp;
                      <input type="text" name="telphone" value="<?php echo ($address['telphone']); ?>"  class="inputBg" onblur="check_telphone1(this.value)">
                     
                  </div><br/>
                    <div style="margin-left:100px;">
                        <input type="hidden" name="id" value="<?php echo ($address['id']); ?>" >
                        <input type="submit" value="提交" >&nbsp;
                        <input type="reset" value="重置">
                    </div>
              </div>    
            </form>
      </div>
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
</body>
</html>