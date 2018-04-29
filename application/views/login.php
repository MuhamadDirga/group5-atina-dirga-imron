<html>
<head>
	<meta charset="UTF-8">
	<title>Belajar CI</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/signin.css">
</head>
<body>
		<div class="container">

      <form class="form-signin" action="Login/proses_login" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Email address</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Email address" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <select name="user_login" id="user_login" class="form-control">
        	<option value="muzaki">Muzaki</option>
        	<option value="useradmin">Admin</option>
        </select>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
<?php $this->load->view('footer') ?>