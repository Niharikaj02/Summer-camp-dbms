<?php 

$host="localhost";
$user="root";
$password="";
$db="summer_camp";

$conn = mysqli_connect($host, $user, $password,$db);

$pid = $_POST['pid'];
$pname = $_POST['pname'];
$day = $_POST['day'];
$fee = $_POST['fee'];
$stu = $_POST['stu'];
$sql="insert into programs values ('$pid','$pname','$day','$fee','$stu')";

if(mysqli_query($conn, $sql)){
     header('Location: success.html');



} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>