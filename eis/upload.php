<?php
include_once "includes/connect.php";
if(isset($_POST['upload']))

{    


	$uploader = $_POST['uploader'];
	$uploaderid = $_POST['uploaderid'];
    $title = $_POST['title'];
    $dateof =$_POST['dateof'];

    //File Processing 
	$file = rand(100,1000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/documents/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	//$final_file=str_replace($file,'mir43',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$new_file_name))


	{
		$sql="INSERT INTO uploads(title,uploader,userid,file,type,dateof,size) VALUES('$title','$uploader','$uploaderid','$new_file_name','$file_type','$dateof','$new_size')";
		mysqli_query($conn,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='uploadreport.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='uploadreport.php?fail';
        </script>
		<?php
	}
}




session_start();
$userid = $_SESSION['hold'];

if(isset($_POST['uploadphoto']))

{    


	// $uploader = $_POST['uploader'];
 //    $title = $_POST['title'];
 //    $dateof =$_POST['dateof'];

    //File Processing 
	$file = $userid."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	//$file_size = $_FILES['file']['size'];
	//$file_type = $_FILES['file']['type'];
	$folder="uploads/profile/";
	
	// new file size in KB
	//$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	//$final_file=str_replace($file,$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$new_file_name))


	{
		$sql="UPDATE expert SET  photo = '$new_file_name' WHERE id='$userid'";
		mysqli_query($conn,$sql);

		?>
		<script>
		alert('successfully uploaded');
        window.location.href='expertinfo.php?id=<?php echo $userid; ?>';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='editexpert.php?id=<?php echo $userid; ?>';
        </script>
		<?php
	}
}
?>