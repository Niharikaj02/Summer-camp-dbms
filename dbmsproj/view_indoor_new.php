<!DOCTYPE html>
<html>
<head>
<title>Indoor activities</title>
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
<h2><u><font color="#002E1D">INDOOR ACTIVITES</font></u></h2>
<table class="styled-table" align="center">
    <thead>
    <tr>
        <th>Activity id</th>
        <th>Name</th>
        <th>Programme</th>
        <th>Time (hrs)</th>
    </tr>
    </thead>
    <tbody>
        
    


<?php
$conn = mysqli_connect("localhost", "root", "", "summer_camp");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT A.* from (activities A join Programs P on A.Pr_no=P.P_no) where P.P_name='Indoor' order by A.E_id" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["E_id"]. "</td><td>" . $row["Name"]    . "</td><td>"
. $row["Pr_no"] . "</td><td>" .$row["Time"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<br>
<button class="button" onclick="location.href='pgm_user_view.html'" type="button">BACK</button>
</tbody>
</table>
</center></body>
</html> 