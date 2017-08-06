<?

if(!$_SESSION['last'] && !$_SESSION['first']){

	echo "Session Expired Plase Sign in again";
 //header("Location: HTTP/1.1 404 File Not Found", 404);
          exit;
      }