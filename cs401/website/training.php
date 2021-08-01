<?php
// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>


<link rel='shortcut icon' type='image/x-icon' href="favicon.ico?">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="workout Website">
<meta name="keywords" content="workout">
<meta name="author" content="Kris Veruari">
<title>Personal Training</title>
<link rel="stylesheet" href="./css/style.css">
</head>

<body>

<header>
<div class="container">
<div id="branding">
<a href="welcome.php"><img src="img/logo.png" width="210" height="55"></a>
</div>
<nav>
<ul>
<li><a href="welcome.php">Home</a></li>
<li><a href="workouts.php">Workouts</a></li>
<li ><a href="meals.php">Meals</a></li>
<li class="current"><a href="training.php">Training</a></li>
</ul>
</nav>
</div>
</header>



</body>

<section id="showcase3">
<div class="container">
<h1></h1>
<p></p>
</div>
</section>
<div class="page-header">
<h1>Logged in as: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
</div>
<p>
<div class = "loginbox">

<a href="logout.php" class="btn btn-danger"><input type="submit" class="btn btn-primary" value="Sign out"></a>
</div>
</p>



<section id="main">
<div class="container">
<article id="main-col">
<h1 class="page-title">Personal Training</h1>
<ul id="services">
<li>
<h3>1 Month</h3>
<p>Includes workouts</p>
<p>$1</p>
</li>
<li>
<h3>6 Months</h3>
<p>Includes workouts and meal plans</p>
<p>$ 2</p>
</li>
<li>
<h3>1 Year</h3>
<p>Includes everything</p>
<p>$25 per month</p>
</li>
</ul>
</article>


</div>
</section>

<footer>
<p>Krypton Body</p>
</footer>
</body>
</html>
