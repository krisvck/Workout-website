<?php
// Initialize the session
session_start();
// Include config file
require_once "login-handler.php";

?>

<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href="favicon.ico?">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="workout Website">
<meta name="keywords" content="workout">
<meta name="author" content="Kris Veruari">
<title>Login | Krypton Body</title>
<link rel="stylesheet" type="text/css" href="./css/logging.css">
<header>
<div class="container">
<div id="branding">
<img src="img/logo.png" width="210" height="55">

</div>
</header>

<body>
<div class="loginbox">
<img src="./img/avatar.png" class="avatar">
<h1>Login Here:</h1>
<p>Enter your credentials.</p><br>
<form action="<?php echo htmlspecialchars($_SERVER["login-handler.php"]); ?>" method="post">
<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
<label>Username:</label>
<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
<span class="help-block"><?php echo $username_err; ?></span>
</div>    
<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
<label>Password:</label>
<input type="password" name="password" class="form-control">
<span class="help-block"><?php echo $password_err; ?></span>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Login">
</div>
<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
</form>

</div>

</body>
</head>
</html>



