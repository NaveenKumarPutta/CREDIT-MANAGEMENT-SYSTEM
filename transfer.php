<html>
<body>
<center>
<?php
$conn = mysqli_connect("localhost","root","","management");
if($conn-> connect_error){
die("connection failed : ". $conn->connect_error);
}
$credits=$_POST['credits'];
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$record="SELECT credit from user_details WHERE username='$sender'";
$result=mysqli_query($conn,$record);
$row=mysqli_fetch_assoc($result);
$num=(int)implode('',$row);
if($credits>$num){
echo "INSUFFICIENT CREDIT BALANCE!!!!";
}
elseif($sender==$receiver)
{
echo "YOU HAVE ENTERED SAME SENDER AND RECEIVER.....TRY AGAIN!!";

}
elseif($credits==0){
echo "CREDITS ENTERED AS ZERO...TRY AGAIN!";
}
else{
$sl="INSERT INTO data(sender,receiver,credits) VALUES('$_POST[sender]','$_POST[receiver]','$_POST[credits]')";
mysqli_query($conn,"UPDATE user_details SET credit = credit - '$credits' WHERE username='$sender'");
mysqli_query($conn,"UPDATE user_details SET credit = credit + '$credits' WHERE username='$receiver'");
echo "INSERTED";
}
?>
</center>
</body>
</html>