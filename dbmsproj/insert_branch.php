<?php 

$host="localhost";
$user="root";
$password="";
$db="summer_camp";

$conn = mysqli_connect($host, $user, $password,$db);

$a = $_POST['bno'];
$b = $_POST['name'];
$c = $_POST['add'];
$d = $_POST['mname'];
$g = $_POST['mid'];
$e = $_POST['ph'];



$sql="insert into branch values ('$a','$b','$c','$e')";
if(mysqli_query($conn, $sql)){
   
     header('Location:success.html');


} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>