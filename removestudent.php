<?php
$host='localhost';
$user='root';
$pass='';
$db='students';


//connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$sid=$_POST['sid'];

$sql="delete from student_details where student_id='$sid'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Deletion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();

?>