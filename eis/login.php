


<!DOCTYPE html>
<html lang="en">

<head>



<?php
   include("includes/connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM expert WHERE username = '$username' and password = '$password' ";
      $result = $conn->query($sql);
      $row=mysqli_fetch_array($result, MYSQLI_ASSOC); //Fetching the whole row 
      $role=$row['role'];
      //$status=$row['status'];
      $username=$row['username'];
      $first=$row['fname'];
      $last=$row['lname'];
       $status=$row['status'];
      $userid=$row['id'];
      $photo=$row['photo'];
      $pass=$row['password'];
     
  
        //
       if ($username==$_POST['username'] && $pass==$_POST['password'] && $row['status']=='ACCEPTED'){

        $_SESSION['first']=$first;
        $_SESSION['role']=$role;
        $_SESSION['last']=$last;
        $_SESSION['id']=$userid;
        $_SESSION['password']=$pass;
        $_SESSION['photo']=$photo;

        // echo $_SESSION['fname']; exit;
         header("location:home.php");
        mysqli_query($conn, "CREATE TABLE IF NOT EXISTS u".$userid."(id integer(7) not null primary key auto_increment, msgto varchar(4), msgfrom varchar(4) default 'ME', message varchar(255), date varchar(12))");
       }
       elseif ($username==$_POST['username'] && $pass==$_POST['password'] && $row['status']=='WAITING...') {

        $_SESSION['first']=$first;
        $_SESSION['last']=$last;
        $_SESSION['role']=$role;
        $_SESSION['id']=$userid;
        $_SESSION['password']=$pass;
        $_SESSION['photo']=$photo;

        header("location:blank.php"); }
        elseif ($username==$_POST['username'] && $pass==$_POST['password'] && $row['status']=='DENIED') {
          $error = "You Dont Have an Account since Your Request was Denied!<br><br>";
        }

        else{
         $error = "Incorrect Username or Password!<br><br>";
        }
      
      }

  
?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eis_login</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> EIS Login</h3>
                    </div>
                    <div class="panel-body">
                    <div style = "font-size:18px; color:#cc0000; margin-top:8px"><b><?php echo $error; session_start(); echo $_SESSION['invalid']; unset($_SESSION['invalid']) ?></b></div>
                        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required="required">
                                </div>
                                <div class="checkbox">
                                    <label> 
                                        <a href="expertform.php"> Forgot Password? </a> ||  <a href="expertform.php"> Sign Up</a>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               
                                <button class="btn btn-success" type="submit" name="submit">Login</button>
                                
                            </fieldset>
                        </form>
                        <div style = "font-size:12px; color:#cc0000; margin-top:8px"><b></b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
