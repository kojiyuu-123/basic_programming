<!-- index.php -->
<?php
	require 'src/helpers/route.php';
	
	// must have, if you are using session
	session_start();
	
	// username and password in this array.
	$login_conf=array('A'=>'abc','B'=>'def','C'=>'pqr');
	
	if(!isset($_SESSION['LOGGED_IN']) && isset($_COOKIE['username'])){
		// if cookie exists, the user login automatically.
		global $login_conf;
		if($login_conf[$_COOKIE['username']]!='undefined'){
			$_SESSION['LOGGED_IN']=$_COOKIE['username'];
			$_SESSION['USERNAME']=$_COOKIE['username'];
		}
	}

	$parsed_url = parse_url($_SERVER['REQUEST_URI']);//ページにアクセスするために指定されたURI。
	//print_r($parsed_url);
	$path = $parsed_url['path'];
	
	if (!isset($_SESSION['LOGGED_IN']) && $parsed_url['path'] != '/' && $parsed_url['path'] != '/login' && $parsed_url['path'] != '/logout') {
	    // Redirect to home page
	    header("Location: /");
	    die();
	}
	
	//$message="";
	
	// Add base route (home page)
	Route::add('/', function() { include 'src/home/index.php';});
	
	Route::add('/home', function() { include 'src/home/index.php';});
	
	Route::add('/users', function() { include 'src/users/index.php'; });
	
	Route::add('/courses', function() { include 'src/courses/index.php'; });
	
	Route::add('/trainers', function() { include 'src/trainers/index.php'; });
	
	Route::add('/login', function() {
		// ／loginを作る
		//ユーザー名をセッションに記憶、指定があればクッキーに記憶する。
		
	    if (!empty($_POST)) {
	    
	    	$username = $_POST['username'];
	    	$pass = $_POST['password'];
		    if ( isset($username) && isset($pass) ) {
		    	    if ( isUserValid($username, $pass)) {
		        	    $_SESSION['LOGGED_IN'] = $username;
		            	$_SESSION['USERNAME'] = $_POST['username'];
		            	header('Location: /');
		            }
		            else{
		            	
		            	header('Location: /');
		            }
		            
		          	if (isset($_POST['rememberUsername'])) {
		          		// クッキーのタイムアウト設定
		      			setcookie('username', $username, time() + (24 * 60 * 60 * 3), "/"); // 3 days
		      			// alert("usernameを記録しました.");
		  			}
		  	}
        }
    	exit;
	},'post');
	
	Route::add('/logout', function() {
		if(isset($_SESSION['LOGGED_IN'])){
			unset($_SESSION['LOGGED_IN']);
			unset($_SESSION['USERNAME']);
			setcookie("username","",time()-1);
			echo "<p>Logout!</p>";
			echo "<a href='/'>back to home</a>";
		}
		else{
			header('Location: /');
		}

		exit;
	});
	
	function isUserValid($username, $password) {
		//ユーザー名、パスワードがあるか確認。
		
		global $login_conf;
		
		if(!isset($login_conf[$username])){
			return;
		}
		
		if($login_conf[$username]==$password){
			return true;
		}
		else{
			return false;
		}
	}
	
	// start the route.
	Route::run('/');


?>
