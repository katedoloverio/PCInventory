

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
  <br/><br/><br/><br/><br/><br/>
   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <form action="/PCInventory/users/login" id="UserLoginForm" method="post" accept-charset="utf-8">
                            <fieldset>
                                <div class="form-group">
                                <input name="data[User][username]" maxlength="20" type="text" id="UserUsername" required="required" class="form-control" placeholder="Username"  type="username" autofocus />
                                </div>
                                <div class="form-group">
                                  <input name="data[User][password]" type="password" id="UserPassword" required="required" class="form-control" placeholder="Password"  type="username" autofocus  />
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  <?php echo $this->Html->link('Sign up now!', array('controller' => 'users', 'action' => 'register')); ?>
                                </div>
                                <div>

                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <button type ="submit" class="btn btn-lg btn-success btn-block">Login
                               </button> </form>
                                
                            </fieldset>
                        <h5><?php echo $this->Session->flash();?></h5>

                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
</body>
</html>   


