<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realm - Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bluth Company">
    <link rel="shortcut icon" href="/928diuba/Public/Admin/assets/ico/favicon.html">
    <link href="/928diuba/Public/Admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/928diuba/Public/Admin/assets/css/theme.css" rel="stylesheet">
    <link href="/928diuba/Public/Admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/928diuba/Public/Admin/assets/css/alertify.css" rel="stylesheet">
    <link rel="Favicon Icon" href="favicon.ico">
    <link href="http://fonts.useso.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
            <ul class="pull-left">
              <li><a id="messages" data-notification="2" href="#"><i class="icon-envelope"></i> Messages</a></li>
              <li><a id="notifications" data-notification="3" href="#"><i class="icon-globe"></i> Notifications</a></li>
            </ul>
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

    <div class="container-fluid">

      <!-- Side menu -->  
      <div class="sidebar-nav nav-collapse collapse">
        <div class="user_side clearfix">
          <img src="/928diuba/Public/Admin/assets/img/odinn.jpg" alt="Odinn god of Thunder">
          <h5>Odinn</h5>
          <a href="#"><i class="icon-cog"></i> Settings</a>        
        </div>
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_F79999" href="index-2.html"><i class="icon-dashboard"></i> <span>Dashboard</span></a>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_C3F7A7 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1"><i class="icon-magic"></i> <span>Features</span></a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="ui_features.html"><i class="icon-star"></i> UI Features</a>
                <a class="accordion-toggle" href="forms.html"><i class="icon-list-alt"></i> Forms</a>
                <a class="accordion-toggle" href="tables.html"><i class="icon-table"></i> Tables</a>
                <a class="accordion-toggle" href="buttons.html"><i class="icon-circle"></i> Buttons</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><i class="icon-reorder"></i> <span>Components</span></a>
            </div>
            <div id="collapse2" class="accordion-body collapse">
              <div class="accordion-inner">
                <a class="accordion-toggle" href="notifications.html"><i class="icon-rss"></i> Notifications</a>
                <a class="accordion-toggle" href="calendar.html"><i class="icon-calendar"></i> Calendar</a>
                <a class="accordion-toggle" href="gallery.html"><i class="icon-picture"></i> Gallery</a>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_F6F1A2" href="tasks.html"><i class="icon-tasks"></i> <span>Tasks</span></a>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_C1F8A9" href="analytics.html"><i class="icon-bar-chart"></i> <span>Analytics</span></a>
            </div>
          </div> 
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_9FDDF6" href="tickets.html"><i class="icon-bullhorn"></i> <span>Support Tickets</span></a>
            </div>
          </div> 
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle b_F5C294 active" href="users.html"><i class="icon-user"></i> <span>Users</span></a>
            </div>
          </div>      
        </div>
      </div>
      <!-- /Side menu -->

      <!-- Main window -->
      <div class="main_container" id="users_page">

        <div class="row-fluid">
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Pages</a> <span class="divider">/</span></li>
            <li class="active">Users</li>
          </ul>
          <h2 class="heading">
              Users
              <div class="btn-group pull-right">
                <button class="btn"><i class="icon-download-alt"></i> Export</button>
                <button class="btn"><i class="icon-envelope"></i> Email</button>
                <button class="btn"><i class="icon-cog"></i> Settings</button>
              </div>
          </h2>
        </div> <!-- /row-fluid -->

        

        <div class="row-fluid">
          <div class="widget widget-padding span12">
            <div class="widget-header">
              <i class="icon-group"></i>
              <h5>Users</h5>
              <div class="widget-buttons">
                  <a href="#" data-title="Add User" data-toggle="modal" data-target="#example_modal"><i class="icon-plus"></i></a>
                  <a href="#" data-title="Collapse" data-collapsed="false" class="collapse"><i class="icon-chevron-up"></i></a>
              </div>
            </div>  
            <div class="widget-body">
              <table id="users" class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th>序号</th>
<th>联系电话</th>
<th>密码</th>
<th>用户姓名</th>
<th>邮箱</th>
<th>头像</th>
<th>状态</th>
<th>时间</th>
<th>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td>
<td><?php echo ($vo["telephone"]); ?></td>
<td><?php echo ($vo["password"]); ?></td>
<td><?php echo ($vo["aliasname"]); ?></td>
<td><?php echo ($vo["email"]); ?></td>
<td><img src="/928diuba/Public/Admin/photo/<?php echo ($vo["photo"]); ?>" width="60" height="60"></td>
<td>
    <?php if($vo["state"] == '0'): ?>正常
    <?php else: ?>
    已禁用<?php endif; ?>
</td>
<td><?php echo ($vo["createtime"]); ?></td>
<td><a href="/928diuba/Admin/User/edituser/id/<?php echo ($vo["id"]); ?>" >修改</a>|<?php if(($vo["state"] == 0)): ?><a href="/928diuba/Admin/User/changestate/id/<?php echo ($vo["id"]); ?>/state/<?php echo ($vo["state"]); ?>">暂停使用</a>
    <?php else: ?>
      <a href="/928diuba/Admin/User/changestate/id/<?php echo ($vo["id"]); ?>/state/<?php echo ($vo["state"]); ?>">取消禁用</a><?php endif; ?>
|<a href="/928diuba/Admin/User/edituser/id/<?php echo ($vo["id"]); ?>" >密码重置</a>|<a href="/928diuba/Admin/User/deluser/id/<?php echo ($vo["id"]); ?>" >删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
            </div> <!-- /widget-body -->
          </div> <!-- /widget -->
        </div> <!-- /row-fluid -->

      </div>
      <!-- /Main window -->

    </div><!--/.fluid-container-->
    </div><!-- wrap ends-->

    <!-- Example Modal -->
    <div id="example_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Add user/employee</h3>
      </div>
      <div class="modal-body">
        <p>Here you can insert the user creation form</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
      </div>
    </div>  

    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/raphael-min.js"></script>
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src='/928diuba/Public/Admin/assets/js/sparkline.js'></script>
    <script type="text/javascript" src='/928diuba/Public/Admin/assets/js/morris.min.js'></script>
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/jquery.dataTables.min.js"></script>   
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/jquery.masonry.min.js"></script>   
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/jquery.imagesloaded.min.js"></script>   
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/jquery.facybox.js"></script>   
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/jquery.alertify.min.js"></script> 
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/jquery.knob.js"></script>
    <script type='text/javascript' src='/928diuba/Public/Admin/assets/js/fullcalendar.min.js'></script>
    <script type='text/javascript' src='/928diuba/Public/Admin/assets/js/jquery.gritter.min.js'></script>
    <script type="text/javascript" src="/928diuba/Public/Admin/assets/js/realm.js"></script>
  </body>
</html>