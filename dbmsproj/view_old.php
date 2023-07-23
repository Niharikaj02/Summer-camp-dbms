<!DOCTYPE html>
<html>
<head>
<title>STUDENT DETAILS</title>
<style>
body {background-color: white;}
table {
border-collapse: collapse;
width: 100%;
color: rgb(6, 25, 34);
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #17408b;
color: white;
}
.button {
  background-color: #fdb927; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 
}
.container{  
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
   }
</style>
</head>
<body>


<table align="center">
<colgroup>
    <col span="1" style="background-color:#f6cd61 ">
    
  </colgroup>
<tr>
<th>STU ID</th>
<th>STUDENT NAME</th>
<th>AGE</th>
<th>GUARDIAN Name</th>
<th>ADDRESS</th>
<th>BRANCH</th>
<th>PROGRAM</th>
<th>PROGRAM NAME</th

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "summer_camp");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT S.*, P.P_name FROM student S, programs P where S.Prgm_no=P.P_no  order by S.S_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["S_id"]. "</td><td>" . $row["Name"]    . "</td><td>"
. $row["Age"] . "</td><td>" .$row["Guardian_Name"] . "</td><td>" .$row["Address"] . "</td><td>" .$row["Branch"] . "</td><td>" .$row["Prgm_no"] . "</td> <td>" .$row["P_name"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<button class="button" onclick="location.href='homepage.html'" type="button">BACK</button>
</table>
</body>
</html>