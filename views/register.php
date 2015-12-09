<form class = "form-horizontal" role = "form" method="POST" action="views/createUser.php">
   <div class = "form-group">
      <label for = "name" class = "col-sm-2 control-label">Name</label>
      <div class = "col-sm-10">
         <input type = "text" class = "form-control" id = "name" name="name" placeholder = "Enter Name">
      </div>
   </div>
   <div class = "form-group">
      <label for = "firstname" class = "col-sm-2 control-label">Username</label>
		
      <div class = "col-sm-10">
         <input type = "text" class = "form-control" id = "username" name="uname" placeholder = "Enter Username">
      </div>
   </div>
   <div class = "form-group">
      <label for = "password" class = "col-sm-2 control-label">Password</label>
      <div class = "col-sm-10">
         <input type = "password" class = "form-control" id = "password" name="pword" placeholder = "Enter password">
      </div>
   </div>
   <div class = "form-group">
      <div class = "col-sm-offset-2 col-sm-10">
         <button type = "submit" class = "btn btn-default">Submit</button>
      </div>
   </div>
</form>