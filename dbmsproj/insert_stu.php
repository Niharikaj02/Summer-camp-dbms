<?php 

$host="localhost";
$user="root";
$password="";
$db="summer_camp";

$conn = mysqli_connect($host, $user, $password,$db);

$sid = $_POST['sid'];
$name = $_POST['name'];
$age = $_POST['age'];
$g = $_POST['g'];
$add = $_POST['add'];
$br = $_POST['br'];
$pno = $_POST['pno'];


$sql="insert into student values ('$sid','$name','$age','$g','$add','$br','$pno')";

if(mysqli_query($conn, $sql)){
    header('Location: success.html');
   
    }
    
else{
       header('Location: all_error.html');
        exit();
}
mysqli_close($conn);
?>