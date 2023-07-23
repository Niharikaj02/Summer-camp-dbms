<?php 

$host="localhost";
$user="root";
$password="";
$db="summer_camp";

$conn = mysqli_connect($host, $user, $password,$db);

$a = $_POST['sid'];
$b = $_POST['name'];
$c = $_POST['des'];
$d = $_POST['dob'];
$g = $_POST['pno'];
$e = $_POST['br'];
$f = $_POST['sal'];


$sql="insert into staff values ('$a','$b','$c','$d','$g','$e','$f')";
if(mysqli_query($conn, $sql)){
   
     header('Location:success.html');


} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>