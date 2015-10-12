<!DOCTYPE html>
<html>
<body>
<?php
 $name = $_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];
 $location = 'uploads/';
 $meta = get_meta_tags($location.$name);
 
 if(MOVE_UPLOADED_FILE($tmp_name,$location.$name))
  {
	  echo "uploaded";
	  echo $meta['size'];
  }
  else
  {
	   echo "not uploaded!!";
  }
?>
<form action="filehandling2.php"  enctype="multipart/form-data" method="post" >
<input type="file" name="file"><br><br>
<input type="submit" value="submit">
</form>
</body>
</html>