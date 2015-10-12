
<!DOCTYPE html>
<html>
<body>
<?php
include 'macro1.php';
include 'demo/getid3/getid3.php'
$name = $_FILES['songs']['name'];
$tmp_name = $_FILES['songs']['tmp_name'];
$type = $_FILES['songs']['audio/mp3'];
$location = 'uploads/';

if(isset($_POST['upload']))

{

   //if($type == 'audio/mp3') {
       if (MOVE_UPLOADED_FILE($tmp_name, $location . $name)) {
           $encode = base64_encode($name);
           $decode = base64_decode($name);
           get
           echo $encode."<br>";
           echo $decode;
           echo "uploaded";
       } else {
           echo "not uploaded!!";
       }
   //}
   /* else
    {
        echo "not an mp3";
    }*/
}
?>
<form action="macro.php"  enctype="multipart/form-data" method="post" >
    <input type="file" name="songs"><br><br>
    <input type="submit" value="submit" name="upload">
</form>
</body>
</html>