<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "mydatabase";

$conn = mysqli_connect($servername,$username,$password,$bdname); 

if($conn)
{
// echo "Connection Ok"; 
}
else{
    echo "Connection Failed ".mysqli_connect_error();
}


$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Gmail = $_POST['Gmail'];
$Address1 = $_POST['Address1'];
$Address2 = $_POST['Address2'];
$Weight = $_POST['Weight'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zip = $_POST['Zip'];
//$Mobile = $_POST['Mobile'];
//$AlternateMobile = $_POST['AlternateMobile'];
$PickupDate = $_POST['PickupDate'];
$sql = " INSERT INTO `mydatabase`.`Devil` ( `FirstName`, `LastName`, `Gmail`, `Address1`, `Address2`, `Weight`, `City`, `State`, `Zip`,`PickupDate`) VALUES('$FirstName', '$LastName', '$Gmail','$Address1', '$Address2', $Weight, '$City', '$State', '$Zip','$PickupDate') ";
// echo $sql;
if ($conn->query($sql) ==  true){
     echo "Details Submitted Successfully,Wait for the owner to contact you,thankyou!";
}
else{
    echo " ERROR :  $sql <br> $conn->error ";
}
$conn->close();
error_reporting(0);
?> 