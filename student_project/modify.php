<?php
$host='localhost';
$user='root';
$pass='';
$db='SCHOLARS';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$sid=$_POST['sid'];
$sna=$_POST['sna'];
$sco=$_POST['sco'];

$sql="update CONTENT set sco='$sco',sna='$sna' where sid='$sid'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>
