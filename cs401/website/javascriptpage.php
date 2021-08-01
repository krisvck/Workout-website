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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/js.css">
        <link rel="styleshhet" href="./css/style.css">
        <title>Welcome</title>
        
    </head>
    <body>
        
        
        <div class="welcome-section content-hidden">
            <div class="content-wrap">
                <ul class="fly-in-text">
                    <li>Welcome! <?php echo htmlspecialchars($_SESSION["username"]); ?></li>
                    <li></li>
                </ul>
                <a href="welcome.php" class="btn btn-warning"><input type="submit" class="btn btn-primary" value="Enter"></a>
                
            </div>
        </div>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript">
            
            $(function() {
                
                var welcomeSection = $('.welcome-section'),
                    enterButton = welcomeSection.find('.enter-button');
                
                setTimeout(function() {
                    welcomeSection.removeClass('content-hidden');
                }, 500);
                
                enterButton.on('click', function(e) {
                    e.preventDefault();
                    welcomeSection.addClass('content-hidden').fadeOut();
                });
                
                
            })();
            
            
            
        </script>

    </body>
</html>