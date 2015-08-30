<style type="text/css">

input[type=text], input[type=button], input[type=password] {
  width: 100%;
}


body { 
  background: url('/PCInventory/img/bc.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.panel-default {
  opacity: 0.9;
  margin-top:30px;
}

.form-group.last {
  margin-bottom:0px;
}

label {
  color: white;
  font-weight: bold;
}

.panel-transparent {
  background: none;
}

.panel-transparent .panel-heading{
  background: rgba(122, 130, 136, 0.2)!important;
}


.panel-transparent .panel-footer{
  background: rgba(122, 130, 136, 0.2)!important;
}
</style>

<div class="container">
 <div class="row">
  <div class="col-sm-4 col-sm-offset-4">
   <div class="panel  panel-transparent" style="margin-top:200px;">
    <div class="panel-heading">
     <label>Login</label>
    </div>
    <div class="panel-body">
     <form action="<?php echo $this->Html->url('/users/login'); ?>"  method="post">
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