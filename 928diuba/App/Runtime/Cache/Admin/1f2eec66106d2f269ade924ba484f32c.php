<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<!--后台模板在线网址 http://www.sucaihuo.com/modals/5/518/demo/ui_features.html-->
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bluth Company">
    <link rel="shortcut icon" href="/928diuba/Public/Admin/assets/ico/favicon.html">
    <link href="/928diuba/Public/Admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/928diuba/Public/Admin/assets/css/theme.css" rel="stylesheet">
    <link href="/928diuba/Public/Admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/928diuba/Public/Admin/assets/css/alertify.css" rel="stylesheet">
    <link rel="Favicon Icon" href="favicon.ico">
    <!-- <link href="http://fonts.useso.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css"> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>  
   <!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>header</title>
  <style type="text/css">
  body{
    background-color: #00FFFF;
  }
  </style>
</head>
<body>
  <div id="wrap">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <div class="logo">
            <img src="/928diuba/Public/Admin/assets/img/logo.png" alt="Realm Admin Template">
          </div>
           <a class="btn btn-navbar visible-phone" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
           <a class="btn btn-navbar slide_menu_left visible-tablet">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="top-menu visible-desktop">
            <ul class="pull-right">  
              <li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
            </ul>
          </div>

          <div class="top-menu visible-phone visible-tablet">
            <ul class="pull-right">  
              <li><a title="link to View all Messages page, no popover in phone view or tablet" href="#"><i class="icon-envelope"></i></a></li>
              <li><a title="link to View all Notifications page, no popover in phone view or tablet" href="#"><i class="icon-globe"></i></a></li>
              <li><a href="login.html"><i class="icon-off"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  










   <!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>side meau</title>
</head>
<body>
    <div class="container-fluid">
   <!-- Side menu -->  
      <div class="sidebar-nav nav-collapse collapse">
        <div class="user_side clearfix">
          <img src="/928diuba/Public/Admin/photo/c.jpg" alt="Odinn god of Thunder">
          <h5>Odinn</h5>
          <a href="#"><i class="icon-cog"></i> Settings</a>        
        </div>

        <div class="accordion" id="accordion1">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1"><i class="icon-reorder"></i> <span>数据统计与分析</span></a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="<?php echo U('Admin/Count/count');?>"><i class="icon-rss"></i> 数据统计</a>
              </div>
            </div>
          </div>
        
          
          <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><i class="icon-reorder"></i> <span>用户信息</span></a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="<?php echo U('Admin/User/userlist');?>"><i class="icon-rss"></i> 用户信息列表</a>
              </div>
            </div>
          </div>
        
       <div class="accordion" id="accordion3">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse3"><i class="icon-reorder"></i> <span>物品信息</span></a>
            </div>
            <div id="collapse3" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="<?php echo U('Admin/Goods/goodslist');?>"><i class="icon-rss"></i> 物品信息列表</a>
              </div>
            </div>
          </div>
        
       <div class="accordion" id="accordion4">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse4"><i class="icon-reorder"></i> <span>失物信息</span></a>
            </div>
            <div id="collapse4" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="<?php echo U('Admin/Lost/lostlist');?>"><i class="icon-rss"></i> 失物信息列表</a>
              </div>
            </div>
          </div>
        
         <div class="accordion" id="accordion5">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse5"><i class="icon-reorder"></i> <span>招领信息</span></a>
            </div>
            <div id="collapse5" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="<?php echo U('Admin/Find/findlist');?>"><i class="icon-rss"></i> 招领信息列表</a>
              </div>
            </div>
          </div>
         </div>
        </div>
        </div>
        </div> 
        </div>
      </div>
      <!-- /Side menu -->








   <div class="footer col-md-10" >
    <p>DiuBa Copy 2016版本</p>
    <div class="clearfix"> </div>
<div id="wrap">
    
    <div class="container-fluid">
        

        <!-- Main window -->
        <div class="main_container" id="users_page">

            <div class="row-fluid">

                <h2 class="heading">
                    数据统计与分析
                </h2>
            </div> <!-- /row-fluid -->


            <!--此处往下为代码改写部分-->
            <div class="row-fluid">
                <div class="widget widget-padding span12">
                    <div class="widget-header">
                        <i class="icon-group"></i>
                        <h5>数据统计</h5>
                        <div class="widget-buttons">
                            <!--<a href="#" data-title="Add User" data-toggle="modal" data-target="#example_modal"><i class="icon-plus"></i></a>-->
                            <a href="#" data-title="Collapse" data-collapsed="false" class="collapse"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="widget-body table-responsive ">
                        <table id="users" class="table table-condensed table-striped table-bordered dataTable">
                            <thead>
                            <tr >
                                <td>注册用户</td>
                                <td>失物启示</td>
                                <td>招领启事</td>
                                <td>生成二维码</td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><?php echo ($count1); ?></td>
                                    <td><?php echo ($count2); ?></td>
                                    <td><?php echo ($count3); ?></td>
                                    <td><?php echo ($count4); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- /widget-body -->
                </div> <!-- /widget -->
            </div> <!-- /row-fluid -->

        </div>
        <!-- /Main window -->

    </div><!--/.fluid-container-->
</div><!-- wrap ends-->
</body>
</html>