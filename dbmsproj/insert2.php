<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "summer_camp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['sub']))
{
	//echo "Inside";
	$a=$_POST['sid'];
    $b=$_POST['name'];
    $c=$_POST['age'];
    $d=$_POST['g'];
    $e=$_POST['add'];
    $f=$_POST['br'];
    $g=$_POST['pno'];
	$sql = "INSERT INTO student values('$a','$b','$c','$d','$e','$f','$g')";
	$stmt1 = $conn->prepare("CALL `onInsertIntoStudent`($a)");
	$stmt1->bind_param("s", $a);
	$stmt2 = $conn->prepare("CALL `onInsertIntoStudent1`($g)");
	$stmt2->bind_param("s", $g);

	if ($conn->query($sql) === TRUE) {
            	echo "The student:";
           	 echo "<br>";
           	 $stmt1->execute();
           	 $stmt1->close();
            	echo "has successfully enrolled in the program";
            	echo "<br>";
            	$stmt2->execute();
            	$stmt2->close();
	} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
	}
$conn->close();
}
?>