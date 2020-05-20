<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My web page</title>
    <script src="src/home/exercise.js"></script>
	<link rel="stylesheet" href="src/home/exercise.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
  
  	<header id="header" style="background-color: #5F524F; height: 120px;">
    	<div id="logo">The logo</div>
    	<div id="slogan" class="slogan">The header slogan</div>
    	
    	<div id='user'>Hi <strong>
    	<?php
    	if(isset($_SESSION['LOGGED_IN'])){
    		echo ($_SESSION['USERNAME']);
    	}
    	else{
    		echo ("Guest!");
    	}
    	?></strong></div>
    	
    	<div id="login" onclick="click_login()" >Login</div>
    	
    	<div id="popup">
	    	<form id="loginform" method="POST" action="/login" >
	    		<p>login</p>
	    		<p>username</p>
	    		
	    		<input type='text' id='user_name' name='username' 
	    		<?php
	    		if(!isset($_COOKIE['username'])){
	    			echo ("placeholder='username'");
	    		}
	    		else{
	    			echo ("value=".$_COOKIE['username']);
	    		}
	    		?> >
	    		
	    		<p>password</p>
	    		<input type="text" id="password" name="password" placeholder="password">
	    		<p>
	    		<input type="checkbox" id="remember" name="rememberUsername">
	    		Remember me?
	    		</p>
	    		<input type="submit" id="Login_button" value="LOGIN" onclick="click_cert()">
	    	</form>
    	</div>
    	
    	<a href="/logout" id="logout">Logout</a>
    	
    	<div id="search">
	        <form method="GET" name="search_words" action="javascript:void(0);" autocomplete="on">
	        
	            <input type="text" name="keyword" onkeypress="press_enterkey();"/>
	            <i class="material-icons">search</i>
	        </form>
    	</div>
	</header>
	
	<nav style="height: 140px;">
	    <ul>
	    	<li><a href="/home">Home</a></li>
	        <li><a href="/users" target="_blank">Users</a></li>
	        <li><a href="/courses" target="_blank">Courses</a></li>
	        <li><a href="/trainers" target="_blank">Trainers</a></li>
	    </ul>
	</nav>
	
	<div id="main" style="height: 400px;">
	    <div id="main-content">
	        <h3> The main content go here</h3>
	        <?php
	        	if(!isset($_SESSION['LOGGED_IN'])){
	        		echo "<p id=info>You are not logged in!!! please login to view more info!</p>";
	        	}
	        ?>
	    </div>
	    <div id="sidebar">
	        <h3> Sidebar </h3>
	        <ul>
	            <li>Feature 1</li>
	            <li>Feature 2</li>
	            <li>Feature 3</li>
	            <li>Feature 4</li>
	            <li>Feature 5</li>
	            <li>Feature 6</li>
	        </ul>
	    </div>
	</div>
    	
	<footer>
	    <ol>
	        <li>Extra info 1</li>
	        <li>Extra info 1</li>
	    </ol>
	    
	    <h3> The footer</h3>
	    <!--
	    <input type="button" id="go_upper" value="go upper" onclick="window.location.href='exercise.html#'">
	    -->
	    
	    <div id="scroll">
        	<!-- <a href="#"> <i class="material-icons">arrow_drop_up</i></a>-->
        	<a href="javascript:void(0);" onclick="scrollToTop()"><i class="material-icons">arrow_drop_up</i></a>
    	</div>
	</footer>
  </body>
</html>