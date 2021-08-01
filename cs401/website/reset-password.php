<?php
// Initialize the session
session_start();
// Include config file
require_once "resetpass-handler.php";

?>

<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href="favicon.ico?">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="workout Website">
<meta name="keywords" content="workout">
<meta name="author" content="Kris Veruari">
<title>Reset | Krypton <Body>
</Body></title>
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
<div class="wrapper">
<h2>Reset Password:</h2>
<p>Please fill out this form to reset your password.</p>
<form action="<?php echo htmlspecialchars($_SERVER["resetpass-handler.php"]); ?>" method="post"> 
<div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
<label>New Password:</label>
<input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
<span class="help-block"><?php echo $new_password_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
<label>Confirm Password:</label>
<input type="password" name="confirm_password" class="form-control">
<span class="help-block"><?php echo $confirm_password_err; ?></span>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit">
<a class="btn btn-link" href="welcome.php">Cancel</a>
</div>
</form>

</div>

</body>
</head>
</html>
