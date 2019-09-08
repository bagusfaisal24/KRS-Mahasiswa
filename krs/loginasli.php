
<!DOCTYPE html>
<html>
<head>
	<title>Login Anggota</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>
<body>
<a href="#" class="btn btn-default"><h3>SIGN IN</h3></a>
<form class="form-horizontal" method="POST" action="proseslogin.php">
  <fieldset>

    <div class="form-group">
      <label for="inputEmail" name="username"  class="col-lg-2 control-label">Username</label>
      <div class="col-lg-4">
        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" required class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" name="password" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-4">
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required class="form-control">
        </div>

        </div>
        <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
        <p class="text-danger"><a href="#">Lupa nama pengguna dan password anda?</a></p>
        </div>
        </div>
        <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit"  class="btn btn-primary">Submit</button>
      </div>
    </div>
</fieldset>
</form>
</body>
</html>
