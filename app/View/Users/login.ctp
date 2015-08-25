<style type="text/css">

input[type=text], input[type=button], input[type=password] {
   
    width: 100%;
}

</style>


<div class="container">
 <div class="row">
  <div class="col-sm-4 col-sm-offset-4">
   <div class="panel panel-default" style="margin-top:200px;">
    <div class="panel-heading">
     <b>Login</b>
    </div>
    <div class="panel-body">
     <form action="/PCInventory/users/login"  method="post">
      <div class="form-group">
       <label for="username">Username</label>
       <input type="text" name="data[User][username]"  id="username" class="form-control" placeholder="Username"/>
      </div>
      <div class="form-group">
       <label for="password">Password</label>
       <input type="password" name="data[User][password]"  id="password" class="form-control" placeholder="Password"/>
      </div>
      <button class="btn btn-primary btn-group-justified" type="submit">Login</button>
     </form>
    </div>
    <div class="panel-footer">
    </div>
   </div>
  </div>
 </div>
</div>