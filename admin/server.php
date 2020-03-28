<?php
	//session_start();
	// initialize variables

	$no = "";
	$category = "";
	$title = "";
	$year = "";
	$author = "";
	//$file="";
	$id=0;
	$edit=false;
	
	$db = mysqli_connect('localhost', 'root', '', 'crud');
	// if/when save button is clicked

/*
	if(isset($_POST["save"]))  
 {  
      //$book = strtoupper ($_POST['book']);
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
      header("location: admin.php");
      exit;
 }
 */
	if (isset($_POST['save'])) {
		//we put strtoupper to convert string to uppercase
		$no = strtoupper(mysql_real_escape_string($_POST['no']));
		$category = strtoupper(mysql_real_escape_string($_POST['category']));
		$title = strtoupper (mysql_real_escape_string($_POST['title']));
		$year = strtoupper (mysql_real_escape_string($_POST['year']));
		$author = strtoupper(mysql_real_escape_string($_POST['author']));
      	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      //$query1 = "INSERT INTO tbl_images(name) VALUES ('$file')";  
		$query = "INSERT INTO info (no,category, title, year, author,name) VALUES ('$no','$category','$title','$year','$author','$file')" ;



	//mysqli_query($db, $query1);
		mysqli_query($db, $query);
		
		header("location: admin.php"); //redirect to admin page after inserting

}
/*
		function test_input($data) 
		{
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
		}
*/
//update the row//
if (isset($_POST['update'])) {

		//we put strtoupper to convert string to uppercase
$no = strtoupper(mysql_real_escape_string($_POST['no']));
$category = strtoupper(mysql_real_escape_string($_POST['category']));
$title = strtoupper (mysql_real_escape_string($_POST['title']));
$year = strtoupper (mysql_real_escape_string($_POST['year']));
$author = strtoupper(mysql_real_escape_string($_POST['author']));
$id = strtoupper(test_input($_POST['id']));
		
$query = "UPDATE info SET no='$no',category='$category', title='$title', year='$year', author='$author'WHERE id=$id ";

		mysqli_query($db, $query);
		
$result=mysqli_query($db, "SELECT * FROM info order by id desc");
		header("location: admin.php"); //redirect to admin page after inserting

}


//delete the row //
if (isset($_GET['del'])) {
	$id = $_GET['del'];
mysqli_query($db, "DELETE FROM info WHERE id=$id");
	
header("location: admin.php"); //redirect to admin page after inserting
	}
	// retrieve record

$result=mysqli_query($db, "SELECT * FROM info order by id desc");









?>




