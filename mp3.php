<?php
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