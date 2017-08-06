<!DOCTYPE html>
<html lang="en">

<head>

<?php
// including the database connection file
include_once "includes/connect.php";

//getting id from url
$userid = $_GET['id'];

if(isset($_POST['update']))
{	
	// if (isset($_POST['submit'])) {  
    
    //$firstname = $_POST['fname'];
    //$middlename =$_POST['mname'];
    //$lastname =$_POST['lname'];
	//$username =$_POST['username'];
	$userid = $_POST['id'];
    $username =$_POST['username'];
    $regionname = $_POST['rname'];
    $districtname =$_POST['dname'];
    $location =$_POST['location'];
    $role = $_POST['role'];
     $gender = $_POST['gender'];
    //$dateregistered = $_POST['dateregistered'];
    $email =$_POST['email'];
    $mobile = $_POST['mobile'];
    $password =$_POST['password'];
	

	// checking empty fields
	 // if(empty($username)) {	
		// 	echo "<font color='red'>Name field is empty.</font><br/>"; exit; }
	// 	if(empty($name)) {
	// 		echo "<font color='red'>Name field is empty.</font><br/>";
	// 	}
		
	// 	if(empty($age)) {
	// 		echo "<font color='red'>Age field is empty.</font><br/>";
	// 	}
		
	// 	if(empty($email)) {
	// 		echo "<font color='red'>Email field is empty.</font><br/>";
	// 	}		
	// } else {	

		//updating the table
		mysqli_query($conn, "UPDATE user SET username='$username',rname='$regionname',dname='$districtname',location='$location', role='$role',gender='$gender', email='$email', mobile='$mobile', password='$password' WHERE id='$userid'");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: viewusers.php");
	//}
}



//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM user WHERE id=$userid");

while($row = mysqli_fetch_array($result))
{
	$username =$row['username'];
    $regionname = $row['rname'];
    $districtname =$row['dname'];
    $location =$row['location'];
    $role = $row['role'];
    $gender = $row['gender'];
    //$dateregistered = $_POST['dateregistered'];
    $email =$row['email'];
    $mobile = $row['mobile'];
    $password =$row['password'];
}


if(isset($_POST['cancel']))
{ header("Location: viewusers.php"); }

if(isset($_POST['home']))
{ header("Location: home.php"); }
	?>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ees</title>

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
                        <h3 class="panel-title">Update User Info</h3>
                    </div>
                    <div class="panel-body">
                   
	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table border="0">
			<tr> 
				<td>Username:&nbsp;</td>
				<td><input class="form-control" type="text" name="username" value=<?php echo $username;?>></td>
			</tr>
			<tr> 
				<td>Region Name:&nbsp;</td>
				<td><input class="form-control" type="text" name="rname" value=<?php echo $regionname;?>></td>
			</tr>
			<tr> 
				<td>District Name:&nbsp;</td>
				<td><input class="form-control" type="text" name="dname" value=<?php echo $districtname;?>></td>
			</tr>
			<tr> 
				<td>Location:&nbsp;</td>
				<td><input class="form-control" type="text" name="location" value=<?php echo $location; ?>></td>
			</tr>
			<tr> 
				<td>Role:&nbsp;</td>
				<td><input class="form-control"  type="text" name="role" value=<?php echo $role;?>></td>
			</tr>
			<tr> 
				<td>Email:&nbsp;</td>
				<td><input class="form-control" type="text" name="email" value=<?php echo $email; ?>></td>
			</tr>
			<tr> 
				<td>Sex:&nbsp;</td>
				<td><input class="form-control" type="text" name="gender" value=<?php echo $gender; ?>></td>
			</tr>
			<tr> 
				<td>Mobile Phone:&nbsp;</td>
				<td><input class="form-control" type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr> 
				<td>Password:&nbsp;</td>
				<td><input class="form-control" type="password" name="password" value=<?php echo $password;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
			</tr>
		</table><br>
		<button  class="btn btn-success" type="submit" name="update">Update</button>
		<button class="btn btn-warning" type="submit" name="home">Home</button>
		<button  class="btn btn-danger" type="submit" name="cancel">Cancel</button>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
