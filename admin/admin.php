<?php
include("server.php");
//include("admin_image.php");
if(isset($_GET['edit'])){
$id=$_GET['edit'];
$edit= true;
$result=mysqli_query($db, "SELECT * FROM info order by id desc");
$record=mysqli_fetch_array($result);
$no = $record['no'];
$category = $record['category'];
$title = $record['title'];
$year = $record['year'];
$author = $record['author'];
$id = $record['id'];

}

?>

<?php
/*  
 $connect = mysqli_connect("localhost", "root", "", "crud");  
 if(isset($_POST["insert"]))  
 {  
      $book = strtoupper ($_POST['book']);
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name,book) VALUES ('$file','$book')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
      header("location: admin.php");
      exit;
 }
 */    
 ?>  

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN-PUPLBM</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="ad.css">
 
</head>
<body>
  <form method="post"  action="server.php" class="form" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>" >		
  <input type="text" name="no"  placeholder="ISBN" value="<?php echo $no;?>" required/>
  <input type="text"  name="category" placeholder="CATEGORY" value="<?php echo $category;?>" required/>
  <input type="text"   name="title" placeholder="TITLE" value="<?php echo $title;?>" required/>
  <input type="number"   name="year" placeholder="DATE" value="<?php echo $year;?>" required/>
  <input type="text"   name="author" placeholder="AUTHOR" value="<?php echo $author;?>" required/> 
  <br>
   <input type="file" name="image" id="image" />  
  <br>
  
<?php if($edit==false):?>
 <input type="submit" name="save" value="save" id="save" class="button button4" autocomplete="off"/>

<?php else:?>
  <input type="submit" name="update" value="save"  id="save"  class="button button4" autocomplete="off"/>
<?php endif ?>
</form>



<table class="container" >
<thead>
		<tr>
     <th><h1>ID&nbsp&nbsp&nbsp&nbsp</h1></th>
			<th><h1>CATEGORY</h1></th>
			<th><h1>ISBN</h1></th>
			<th><h1>TITLE</h1></th>
			<th><h1>DATE</h1></th>
			<th><h1>AUTHOR</h1></th>
      <th><h1>IMAGE</h1></th>
			<th><h1>ACTION</h1></th>
		</tr>
	</thead>
	<tbody>
<?php 



$result=mysqli_query($db, "SELECT * FROM info order by id desc");
//$result2=mysqli_query($db, "SELECT * FROM tbl_images order by id desc");
while($row=mysqli_fetch_array($result)) { ?>
<tr>

<td><?php echo $row["id"];?></td>
<td><?php echo $row["category"];?></td>
<td ><?php echo $row["no"];?></td>
<td><?php echo $row["title"];?> </td>
<td><?php echo $row["year"];?></td>
<td><?php echo $row["author"];?></td>
<td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row["name"]).'" height="50" width="50"';?></td>

 <!--<td><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="400" width="200" class="img-thumnail" />  </td>
-->
<td>
<center>
<a class="edit_btn"  href="admin.php?edit=<?php echo $row['id']; ?>">Edit</a>
</center>
</td>
<td>
<center>
  <a class="del_btn" name="del" href="server.php?del=<?php echo $row['id']; ?>">Delete</a>
</center>
 </td>

</tr>
</tbody>
<?php }?>
</table>

</body>
</html>
<script>  
 $(document).ready(function(){  
      $('#save').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  