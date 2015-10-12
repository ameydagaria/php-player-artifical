<?php
$username = "root";
$password = "";
$database = "macro";
$server = "127.0.0.1";
mysql_connect($server,$username,$password);
$dbfound = mysql_select_db($database);
if($dbfound)
{
    echo "database found : ".$database."<br><br>";
}
else
{
    echo "not found!!!";
}

?>