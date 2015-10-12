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
<?php
class CMP3File {
    var $title;var $artist;var $album;var $year;var $comment;var $genre;
    function getid3 ($file) {
        if (file_exists($file)) {
            $id_start=filesize($file)-128;
            $fp=fopen($file,"r");
            fseek($fp,$id_start);
            $tag=fread($fp,3);
            if ($tag == "TAG") {
                $this->title=fread($fp,30);
                $this->artist=fread($fp,30);
                $this->album=fread($fp,30);
                $this->year=fread($fp,4);
                $this->comment=fread($fp,30);
                $this->Genre=fread($fp,30);
                fclose($fp);
                return true;
            } else {
                fclose($fp);
                return false;
            }
        } else { return false; }
    }
}

include "CMP3File.php";
$filename="rockstar - 12 - tum ho.mp3";
$mp3file=new CMP3File;
$mp3file->getid3($filename);
echo "Title: $mp3file->title<br>\n";
echo "Artist: $mp3file->artist<br>\n";
echo "Album: $mp3file->album<br>\n";
echo "Year: $mp3file->year<br>\n";
echo "Comment: $mp3file->comment<br>\n";
echo "Genre: " . Ord($mp3file->genre) . "<br>\n";
?>





