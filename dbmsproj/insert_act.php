<?php 

$host="localhost";
$user="root";
$password="";
$db="summer_camp";

$conn = mysqli_connect($host, $user, $password,$db);

$a = $_POST['aid'];
$b = $_POST['aname'];
$c = $_POST['pno'];
$d = $_POST['time'];



$sql="insert into activities values ('$a','$b','$c','$d')";
if(mysqli_query($conn, $sql)){
   
    header('Location: success.html');

} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>