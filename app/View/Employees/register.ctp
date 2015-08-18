
<h2><?php echo __('Register'); ?></h2>



<h1><?php echo $this->Session->flash();?></h1>

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
<div class="bs-example">
   

    <form action="/TRY/login" id="UserLoginForm" method="post" accept-charset="utf-8">

    <div >
    <input type="hidden" name="_method" value="POST"/>
    </div>
  
    <fieldset><legend>Login, please</legend>

    <div class="form-group"  class="input text required">
    <label for="UserUsername">Username</label>
    <input name="data[User][username]" maxlength="20" type="text" id="UserUsername" required="required" class="form-control"/>
    </div>

     <div class="form-group"  class="input text required">
    <div class="input password required"><label for="UserPassword">Password</label>
    <input name="data[User][password]" type="password" id="UserPassword" required="required" class="form-control" />
    </div>

    </fieldset>

    <button class="submit"  class="btn btn-primary"> Sign In</button></form>
</div>
</body>
</html>   


