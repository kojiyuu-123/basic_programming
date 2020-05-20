<?php
/*
class Route {
	//ファイル構造が見えないようにする。
    private static $routes = Array();
    private static $pathNotFound = null;
    private static $methodNotAllowed = null;

    public static function add($expression, $function, $method = 'get'){
    	//$routes にベースルートを記憶する。
    	
      array_push(self::$routes, Array(
        'expression' => $expression,
        'function' => $function,
        'method' => $method
      ));
      //echo "passed<br>";
      //print_r(self::$routes);
    }

    public static function pathNotFound($function){
      self::$pathNotFound = $function;
    }

    public static function methodNotAllowed($function){
      self::$methodNotAllowed = $function;
    }

    public static function run($basepath = '/') {
      // Parse current url, parse uri
      $parsed_url = parse_url($_SERVER['REQUEST_URI']);
      //print_r($parsed_url);

      if(isset($parsed_url['path'])) {
        $path = $parsed_url['path'];
      } else {
        $path = '/';
      }

      // Get current request method
      $method = $_SERVER['REQUEST_METHOD'];

      $path_match_found = false;

      $route_match_found = false;

      foreach(self::$routes as $route) {
      	//echo $route['expression'].'<br/>';
      	
        // If the method matches check the path
        // Add basepath to matching string
        if($basepath != '' && $basepath != '/') {
          $route['expression'] = '(' . $basepath . ')' . $route['expression'];
        }

        // Add 'find string start' automatically
        $route['expression'] = '^' . $route['expression'];
		
        // Add 'find string end' automatically
        $route['expression'] = $route['expression'] . '$';

        //echo $route['expression'].'<br/>';
        
        //print("path name: ".$path."<br>");

        // Check path match
        if(preg_match('#' . $route['expression'] . '#', $path, $matches)){
        	//　パターンにマッチした文字列を検索。
        	//　ここでは# $route['expression']# を $path 内から探し、結果を$matches に入れる。
        	//　$matchesには検索文字列と位置を記憶
        	
        	//print_r($matches);

          $path_match_found = true;

          // Check method match
          if(strtolower($method) == strtolower($route['method'])) {
            // Always remove first element. This contains the whole string
            array_shift($matches);
			//echo $route['expression'].'<br/>';
            if($basepath!='' && $basepath != '/') {
              // Remove basepath
              array_shift($matches);
            }

            call_user_func_array($route['function'], $matches);

            $route_match_found = true;

            // Do not check other routes
            break;
          }
        }
      }

      // No matching route was found
      if(!$route_match_found) {
        // But a matching path exists
        if($path_match_found){
          header("HTTP/1.0 405 Method Not Allowed");

          if(self::$methodNotAllowed) {
            call_user_func_array(self::$methodNotAllowed, Array($path, $method));
          }
        } else {
          header("HTTP/1.0 404 Not Found");

          if(self::$pathNotFound){
            call_user_func_array(self::$pathNotFound, Array($path));
          }
        }
      }
    }
  }
 */
 
 
 
 class Route {
    private static $routes = Array();
    private static $pathNotFound = null;
    private static $methodNotAllowed = null;

    public static function add($expression, $function, $method = 'get'){
      array_push(self::$routes, Array(
        'expression' => $expression,
        'function' => $function,
        'method' => $method
      ));
    }

    public static function pathNotFound($function){
      self::$pathNotFound = $function;
    }

    public static function methodNotAllowed($function){
      self::$methodNotAllowed = $function;
    }

    public static function run($basepath = '/') {
      // Parse current url, parse uri
      $parsed_url = parse_url($_SERVER['REQUEST_URI']);

      if(isset($parsed_url['path'])) {
        $path = $parsed_url['path'];
      } else {
        $path = '/';
      }

      // Get current request method
      $method = $_SERVER['REQUEST_METHOD'];

      $path_match_found = false;

      $route_match_found = false;

      foreach(self::$routes as $route) {
        // If the method matches check the path

        // Add basepath to matching string
        if($basepath != '' && $basepath != '/') {
          $route['expression'] = '(' . $basepath . ')' . $route['expression'];
        }

        // Add 'find string start' automatically
        $route['expression'] = '^' . $route['expression'];

        // Add 'find string end' automatically
        $route['expression'] = $route['expression'] . '$';

        // echo $route['expression'].'<br/>';

        // Check path match
        if(preg_match('#' . $route['expression'] . '#', $path, $matches)){

          $path_match_found = true;

          // Check method match
          if(strtolower($method) == strtolower($route['method'])) {
            // Always remove first element. This contains the whole string
            array_shift($matches);

            if($basepath!='' && $basepath != '/') {
              // Remove basepath
              array_shift($matches);
            }

            call_user_func_array($route['function'], $matches);

            $route_match_found = true;

            // Do not check other routes
            break;
          }
        }
      }

      // No matching route was found
      if(!$route_match_found) {
        // But a matching path exists
        if($path_match_found){
          header("HTTP/1.0 405 Method Not Allowed");

          if(self::$methodNotAllowed) {
            call_user_func_array(self::$methodNotAllowed, Array($path, $method));
          }
        } else {
          header("HTTP/1.0 404 Not Found");

          if(self::$pathNotFound){
            call_user_func_array(self::$pathNotFound, Array($path));
          }
        }
      }
    }
  }
  
?>
