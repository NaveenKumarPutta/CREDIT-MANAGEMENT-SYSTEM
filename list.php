<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url("55a.jpg");
 background-size: cover; 
}
.btn{
width: 100px;
background: black;
border 2px GREEN;
color: white;
padding: 5px;
font-size: 12px;
cursor: pointer;
margin: 12px 0;
}
form{
width: 300px;
position : absolute;
top:50%;
left:50%;
transform: translate(-80%,-50%);
color:gold;
}
h2{
 font-weight:bold;
 color: red;
}
table{
font-weight:bold;
color: #d96459;

}
th{
backgrond-color: #d96459;
color: green;
}
tr{
color:black;
}
}

</style>
</head>
<body><form>
<center>
<br><br><br><br><br>
<h2>LIST OF USERS</h2>
<table>
<tr>
<th>USERNAME</th>
<th>E-MAIL</th>
<th>CREDITS</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","management");
if($conn-> connect_error){
die("connection failed : ". $conn->connect_error);
}
$sl="SELECT username,email,credit FROM user_details";
$result=$conn->query($sl);
if($result->num_rows>0)
{
while($row=$result-> fetch_assoc()){

echo "<tr><td>". $row["username"] ."</td><td>". $row["email"] ."</td><td>". $row["credit"] ."</td></tr>";
}
echo "</table>";
}
else{
echo "0 results";
}
$conn->close();
?>
</table>
<br>
<br>
<center>
<a href="transfer.html"><input type="button" class="btn" value="SELECT USER"></button></a>
<a href="home.html"><input type="button" class="btn" value="BACK"></button></a></center>
</center>
</form>
</body>
</html>
