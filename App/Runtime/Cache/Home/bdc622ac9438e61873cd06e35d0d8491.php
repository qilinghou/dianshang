<?php if (!defined('THINK_PATH')) exit();?><div class="footer-box">
  <div class="footer-table" id="footer_table">
    <div class="w clearfix">
      <div class="someInfo Left">
        <div class="phone">
          <h4>24小时客服热线</h4>
          <p style="font-size:16px;">4008-599-566</p>
        </div>
        
        <div class="count">截止今日，开森商城已上架玩具<strong class="red">1000</strong>多款</div>
        <a class="look" href="" target="_blank" title="查看今日特价">查看今日特价</a> 
        </div>
      <table cellspacing="0" cellpadding="0" class="dtab">
        <tbody><tr>
        <td><div class="line"></div></td>
                  <td><dl class="dl">
              <dt class="dt">关于我们</dt>
              <dd class="dd"> 
                  <a href="" target="_blank" rel="nofollow">公司简介</a>
                  <a href="<?php echo U('Job/job');?>" target="_blank" rel="nofollow">诚聘英才</a>
                  <a href="" target="_blank" rel="nofollow">网站地图</a>
              </dd>
            </dl></td>
        <td><div class="line"></div></td>   
                  <td><dl class="dl">
              <dt class="dt">购物指南</dt>
              <dd class="dd"> 
                <a href="/tongmeng/index.php/Reg" target="_blank" rel="nofollow">注册新用户</a>
                <a href="" target="_blank" rel="nofollow">订购流程</a>
                <a href="" target="_blank" rel="nofollow">常见问题</a>
              </dd>
            </dl></td>
        <td><div class="line"></div></td>   
                  <td><dl class="dl">
              <dt class="dt">配送方式</dt>
              <dd class="dd"> 
                <a href="" target="_blank" rel="nofollow">收货指南</a>
                <a href="" target="_blank" rel="nofollow">物流费用</a>
                <a href="" target="_blank" rel="nofollow">物流配送</a>
              </dd>
            </dl></td>
        <td><div class="line"></div></td>   
                  <td><dl class="dl">
              <dt class="dt">帮助中心</dt>
              <dd class="dd"> 
                <a href="" target="_blank" rel="nofollow">7天无理由退换货</a>
                <a href="" target="_blank" rel="nofollow">如何申请退款</a>
              </dd>
            </dl></td>
        <td><div class="line"></div></td>   
                  <td><dl class="dl">
              <dt class="dt">友情连接</dt>
              <dd class="dd"> 
              <?php if(is_array($links)): foreach($links as $key=>$link): ?><a href="<?php echo ($link["links"]); ?>" target="_blank" rel="nofollow"><?php echo ($link["linkname"]); ?></a><?php endforeach; endif; ?>
              </dd>
            </dl></td>
        <td><div class="line"></div></td>
        </tr>
      </tbody></table>
      <div class="weixin Right" style="width:140px;">
        <h2 class="title">开森商城微信号</h2>
        <div class="img" style="width:100px; height:100px;margin-left:15px;"></div>
        <p>随手扫一扫,优惠全知晓!</p>
      </div>
    </div>
  </div>
  <div class="w footer-icon">
      <div class="order Left">
        <div class="orderInput">
          <input type="text" class="email" id="JS_subscribe" value="请输入您的电子邮箱" onfocus="if(this.value==&#39;请输入您的电子邮箱&#39;)this.value=&#39;&#39;" onblur="if(this.value==&#39;&#39;)this.value=&#39;请输入您的电子邮箱&#39;">
        </div>
        <a href="javascript:void(0);" title="订阅" class="orderBtn" onclick="subscribe();">订阅</a> 
  </div>
  <div class="iconMap Right">
    <ul>
      <li class="ic1">&nbsp;</li>
      <li class="ic2">&nbsp;</li>
      <li class="ic3">&nbsp;</li>
      <li style="width:100px;"><a href="" target="_blank" rel="nofollow">
      <img src="/tongmeng/Public/Home/Img/kexin.png" original="/tongmeng/Public/Home/Img/kexin.png" style="display: inline;"></a></li>
      <li style="width:100px;"><a href="" target="_blank" rel="nofollow">
      <img src="/tongmeng/Public/Home/Img/hy_83x30.png" original="/tongmeng/Public/Home/Img/hy_83x30.png" style="display: inline;"></a></li>
      <li style="width:100px;"><a href="" target="_blank" rel="nofollow">
      <img src="/tongmeng/Public/Home/Img/bottom_small_img.png" original="/tongmeng/Public/Home/Img/bottom_small_img.png" style="display: inline;"></a></li>
    </ul>
  </div>
</div>
  <!-- 底部版权信息 -->
  <div class="w footer-copy"> 
  <br>
    © 2005-2015 开森商城 版权所有，并保留所有权利。<br>                                                           
      ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow"><?php echo ($config['icp']); ?></a> <?php echo ($config['cnzz']); ?><br>
    </div>
</div>
<div id="returnTop"></div>
<script language="javascript" type="text/javascript">
$(window).scroll(function(){
    var tt = document.documentElement.scrollTop||document.body.scrollTop;;
    if(tt>500){
      $('#returnTop').show();
    }
    else{
       $('#returnTop').hide();
    }
 });
$('#returnTop').click(function(){
    $("html, body").animate({'scrollTop':0},320);
})
</script>