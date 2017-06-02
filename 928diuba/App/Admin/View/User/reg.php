<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<form class="form-horizontal" role="form" method="POST" >
  <div class="form-group">
    <label for="telephone" class="col-sm-2 control-label">手机号</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telephone" placeholder="手机号"require="required" pattern="[0-9]{11}">
    </div>
  </div>
  <div class="form-group">
    <label for="aliasname" class="col-sm-2 control-label">用户名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="aliasname" placeholder="用户名" pattern="[0-9a-zA-Z_]{6,12}" require="required">
    </div>
  </div>
   <div class="form-group">
    <label for="password" class="col-sm-2 control-label">密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="密码" pattern="[0-9a-zA-Z_]{6,12}" require="required">
    </div>
  </div>
   <div class="form-group">
    <label for="password" class="col-sm-2 control-label">确认密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="确认密码" pattern="[0-9a-zA-Z_]{6,12}" require="required">
    </div>
  </div>
   <div class="form-group">
    <label for="email" class="col-sm-2 control-label">邮箱</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="邮箱"  require="required">
    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">注册</button>
    </div>
  </div>
</form>
</body>
</html>