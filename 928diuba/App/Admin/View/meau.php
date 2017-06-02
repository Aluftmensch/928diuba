<?PHP
 session_start();
?> 
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>丢吧</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/jQuery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<style type="text/css">
   
.body{
  font-family: Georgia;
}
  #main-nav {
            margin-left: 1px;

        }
         #main-nav.nav-tabs.nav-stacked > li > a {
                padding: 10px 8px;
                font-size: 15px;
                font-weight: 600;
                color: black  ;
                background:   #75b0dd;
                 background: -moz-linear-gradient(top, #d5e2f3 0%, #89b2e0 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d5e2f3), color-stop(100%,#89b2e0));
                background: -webkit-linear-gradient(top, #d5e2f3 0%,#89b2e0 100%);
                background: -o-linear-gradient(top, #d5e2f3 0%,#89b2e0 100%);
                background: -ms-linear-gradient(top, #d5e2f3 0%,#89b2e0 100%);
                background: linear-gradient(top, #d5e2f3 0%,#89b2e0 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
                border: 1px solid   #91a5c0;
                border-radius: 4px;
              }
               
            #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover {
                    background:   #91a5c0;
                }
            .secondmenu a {
            font-size: 14px;
            color: black;
            text-align: center;
        }
 
        .navbar-static-top {
            
            margin-bottom: 5px;
        }
 
        .navbar-brand {
            background: url('') no-repeat 10px 8px;
            
            vertical-align: middle;
            padding-left: 50px;
           
        }
        .nav-header.collapsed > span.glyphicon-chevron-down:before {
    content: "\e114";
}

.nav-header > span.glyphicon-chevron-down:before {
    content: "\e113";
}
</style>

<style type="text/css">
<!--
a:link {
    text-decoration: none; color:#000;
}
a:visited {
    text-decoration: none; color:#000;
}
a:hover {
    text-decoration: none; color:#000;
}
a:active {
    text-decoration: none; color:#000;
}
-->
</style>
<body background="Upload/homebg.jpg"  leftmargin="0" topmargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="100" height="50" align="center" bgcolor="#72A5DF" scope="col">&nbsp;</th>
    <th width="300" align="center" bgcolor="#72a5df" scope="col"><img src="Upload/logo.jpg" width="200" height="70" /></th>
    <th align="center" bgcolor="#72a5df" scope="col">&nbsp;</th>
    <th width="350" height="50" align="right" bgcolor="#72a5df" scope="col"><a href="index.php?c=index&m=index">查看网站首页</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="admin.php?c=home&m=adminhome">&nbsp;刷新&nbsp;</a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="admin.php?c=home&m=dhl">关于“民族美食网”</a></th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
  <div class="navbar navbar-duomi navbar-static-top" role="navigation">
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                
        <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                    <li class="active" >
                        <a href="admin.php?c=Home&m=adminhome">
                            <i class="glyphicon glyphicon-th-large"></i>
                             首页     
                        </a>
                    </li>
                    
                    <li >
                        <a href="#usersSetting" class="nav-header collapsed" data-toggle="collapse" data-parent="#accordion">
                            <i class="  glyphicon glyphicon-user"></i>
                            数据统计与分析
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                        </a>
                        
                        <ul id="usersSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">   
                            
                            <li><a href="admin.php?c=user&m=listusers"><i class="glyphicon glyphicon-asterisk"></i>数据统计</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#foodtype" class="nav-header collapsed" data-toggle="collapse">
                            <i class="  glyphicon glyphicon-facetime-video"></i>
                            用户信息
                            <span class="pull-right glyphicon glyphicon-chevron-down"></span>    
                        </a>
                        <ul id="foodtype" class="nav nav-list collapse secondmenu " style="height: 0px;">
                            
                            
                            <li><a href="admin.php?c=type&m=typelist"><i class="glyphicon glyphicon-asterisk"></i>用户列表</a></li>
                            
                        </ul>
                    </li>
 
                    <li>
                        <a href="#foodinformation" class="nav-header collapsed" data-toggle="collapse">
                            <i class="  glyphicon glyphicon-facetime-video"></i>
                           物品信息
                            <span class="pull-right glyphicon glyphicon-chevron-down"></span> 
                        </a>
                        <ul id="foodinformation" class="nav nav-list collapse secondmenu " style="height: 0px;">
                          
                            
                         <li><a href="admin.php?c=food&m=listfoods"><i class="glyphicon glyphicon-asterisk"></i>物品信息列表</a></li>
                            
                        </ul>
                    </li>
 
                    <li>
                         <a href="#contentSetting" class="nav-header collapsed" data-toggle="collapse">
                            <i class="  glyphicon glyphicon-question-sign"></i>
                            失物信息
                            <span class="pull-right glyphicon glyphicon-chevron-down"></span> 
                        </a>
                        <ul id="contentSetting" class="nav nav-list collapse secondmenu  " style="height: 0px;">
                            
                            
                         <li><a href="admin.php?c=liuyan&m=liuyanlist"><i class="glyphicon glyphicon-asterisk"></i>失物信息列表</a></li>
                            
                        </ul>
                    </li>
                     <li>
                         <a href="#contentSetting" class="nav-header collapsed" data-toggle="collapse">
                            <i class="  glyphicon glyphicon-question-sign"></i>
                           招领信息
                            <span class="pull-right glyphicon glyphicon-chevron-down"></span> 
                        </a>
                        <ul id="contentSetting" class="nav nav-list collapse secondmenu  " style="height: 0px;">
                            
                            
                         <li><a href="admin.php?c=liuyan&m=liuyanlist"><i class="glyphicon glyphicon-asterisk"></i>招领信息列表</a></li>
                            
                        </ul>
                    </li>
                    
                    
                   
 
 
 
                </ul>
            </div>
 <div class="col-md-10">
 