<!DOCTYPE html>
<html>
<head>
<title>Outdoor Activities</title>
<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}   
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
</head>
<body><center>
<h2><u><font color="#002E1D">OUTDOOR ACTIVITES</font></u></h2>

     <table class="styled-table" align="center">    
     <thead>
 
    <tr ><th></th><th> Number of students:</th><th></th><th></th></tr>
    <tr>
        <th>Activity id</th>
        <th>Name</th>
        <th>Programme</th>
        <th>Duration(hrs)</th>
    </tr>
    </thead>
    <tbody>
  
    


<?php
$conn = mysqli_connect("localhost", "root", "", "summer_camp");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql =  "SELECT A.*, P.No_of_students from (activities A join Programs P on A.Pr_no=P.P_no) where P.P_name='Outdoor' order by A.E_id"  ;
$result = $conn->query($sql);
$sql1 =  "SELECT A.*, P.No_of_students from (activities A join Programs P on A.Pr_no=P.P_no) where P.P_name='Outdoor' order by A.E_id"  ;
$result1 = $conn->query($sql1);
if ($result->num_rows > 0) {
$row1 = $result1->fetch_assoc();
  echo '<header class="w3-container w3-center w3-padding-48 rb b">';
  echo "<div class='w3-text-black'>";
  echo '<div>';
  echo "<h2>NO OF STUDENTS: ".$row1["No_of_students"]."</h2> ";
  echo '</div>';
  echo '</div>';
  
 // output data of each row
       while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["E_id"]. "</td><td>" . $row["Name"]    . "</td><td>"
            . $row["Pr_no"] . "</td><td>" .$row["Time"] . "</td></tr>";
        }
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<button class="button" onclick="location.href='view_prgms.html'" type="button">BACK</button>
</tbody>
</table>
</center></body>
</html> 