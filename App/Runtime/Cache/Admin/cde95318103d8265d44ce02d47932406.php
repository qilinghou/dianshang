<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tongmeng/Public/css/themer.css" media="screen">

<title>网站配置</title>
<style type="text/css">
    #mws-wrapper{
        margin-left:-150px;
    }
    
</style>
</head>

<body>
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>网站配置</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="<?php echo U('Config/update');?>" method="post" enctype="multipart/form-data">
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">网站标题:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="title" value="<?php echo ($config['title']); ?>" id="title"><span style="color:#f00" id="tsmsg" style="margin-left:10px;"></span>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">网站关键字:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="keywords" value="<?php echo ($config['keywords']); ?>" id="title"><span style="color:#f00" id="tsmsg" style="margin-left:10px;"></span>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">网站描述:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="description" value="<?php echo ($config['description']); ?>" id="title"><span style="color:#f00" id="tsmsg" style="margin-left:10px;"></span>
                                    </div>
                                </div>
                                <div class="mws-form-inline">
                                    <div style="width: 50%;" class="mws-form-row">
                                        <label class="mws-form-label">网站logo:</label>
                                        <div class="mws-form-item">
                                           <input type="file" name="photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">网站统计:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="cnzz" value="<?php echo ($config['cnzz']); ?>" id="title"><span style="color:#f00" id="tsmsg" style="margin-left:10px;"></span>
                                    </div>
                                </div>
                                                                <div class="mws-form-row">
                                    <label class="mws-form-label">网站ICP备案号:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="icp" value="<?php echo ($config['icp']); ?>" id="title"><span style="color:#f00" id="tsmsg" style="margin-left:10px;"></span>
                                    </div>
                                </div>
              
               
                                <div class="mws-form-row">
                                    <label class="mws-form-label">网站开关:</label>
                                    <ul class="mws-form-list">
                                        <li><input type="radio" name="status" value="1" checked><label>开启网站</label></li>
                                        <li><input type="radio" name="status" value="0"> <label>关闭网站</label></li>
                                    </ul>
                                </div>
                               
                               
                            </div>
                            <div class="mws-button-row">
                                <input type="hidden" name="id" value="1">
                                <input type="submit" value="提交" class="btn btn-danger">
                                <input type="reset" value="重置" class="btn ">
                            </div>
                        </form>
                    </div>      
                </div>
        
            <!-- Footer -->
          
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/tongmeng/Public/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/tongmeng/Public/js/libs/jquery.placeholder.min.js"></script>
    <script src="/tongmeng/Public/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/tongmeng/Public/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/tongmeng/Public/jui/jquery-ui.custom.min.js"></script>
    <script src="/tongmeng/Public/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/tongmeng/Public/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/tongmeng/Public/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/tongmeng/Public/plugins/flot/jquery.flot.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/tongmeng/Public/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/tongmeng/Public/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/tongmeng/Public/plugins/validate/jquery.validate-min.js"></script>
    <script src="/tongmeng/Public/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/tongmeng/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/tongmeng/Public/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/tongmeng/Public/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/tongmeng/Public/js/demo/demo.dashboard.js"></script>

</body>
</html>