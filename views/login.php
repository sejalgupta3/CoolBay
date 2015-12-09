<form class = "form-horizontal" role = "form" method="POST" action="views/validateUser.php">  
   <div class = "form-group">
      <label for = "userName" class = "col-sm-2 control-label">Username</label>
      <div class = "col-sm-10">
         <input type = "text" class = "form-control" id = "userName" name="userName" placeholder = "Enter Username">
      </div>
   </div>
   <div class = "form-group">
      <label for = "password" class = "col-sm-2 control-label">Password</label>
      <div class = "col-sm-10">
         <input type = "password" class = "form-control" id = "password" name="upassword" placeholder = "Enter password">
      </div>
   </div>
   <div class = "form-group">
      <div class = "col-sm-offset-2 col-sm-10">
         <button type = "submit" class = "btn btn-default">Sign in</button>
      </div>
   </div>
</form>