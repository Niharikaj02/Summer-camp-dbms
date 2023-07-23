<?php 

$host="localhost";
$user="root";
$password="";
$db="summer_camp";

$conn = mysqli_connect($host, $user, $password,$db);

$a = $_POST['rid'];
$b = $_POST['name'];
$c = $_POST['des'];
$d = $_POST['met'];
$e = $_POST['br'];



$sql="insert into sponsor values ('$a','$b','$c','$d','$e')";
if(mysqli_query($conn, $sql)){
   
     header('Location:success.html');
     exit();

} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>