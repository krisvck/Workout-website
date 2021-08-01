<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
}
?>


<html>
<head>
<link rel='shortcut icon' type='image/x-icon' href="favicon.ico?">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="workout Website">
<meta name="keywords" content="workout">
<meta name="author" content="Kris Veruari">
<title>Welcome</title>
<link rel="stylesheet" href="./css/style.css">
<script src="jquery-3.4.1.min.js"></script>

</head>
<header>
<div class="container">
<div id="branding">
<a href="welcome.php"><img src="img/logo.png" width="210" height="55"></a>
</div>
<nav>
<ul>
<li class="current"><a href="welcome.php">Home</a></li>
<li><a href="workouts.php">Workouts</a></li>
<li><a href="meals.php">Meals</a></li>
<li><a href="training.php">Training</a></li>
</ul>

</nav>
</div>
</header>
<body>
<div class="page-header">
<h1>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
</div>
<p>
<div class = "loginbox">
<a href="reset-password.php" class="btn btn-warning"><input type="submit" class="btn btn-primary" value="Reset Password"></a>
<a href="logout.php" class="btn btn-danger"><input type="submit" class="btn btn-primary" value="Sign out"></a>
</div>
</p>


<section id="boxes">
<div class="container">
<div class="box">
<a href="workouts.php"><img src="./img/workouts.jpg"></a>
<h3>Workouts</h3>
<p>We will privide you with personalized workouts based on your needs.</p>
</div>
<div class="box">
<a href="meals.php"><img src="./img/food.jpg"></a>
<h3>Meal Plans</h3>
<p>We provide custom meal plans designed to fit your needs and schedule for maximum
efficiency.</p>
</div>
<div class="box">
<a href="training.php"><img src="./img/personal.jpg"></a>
<h3>Personal Training</h3>
<p>We offer personal training for everyone.</p>
</div>
</div>
</section>
</body>
<footer>
<p>Krypton Body</p>
</footer>

</html>
