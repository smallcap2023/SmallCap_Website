
<?php
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$email=$_POST["Eemail"];
$phnum=$_POST["phn"];
$datee=$_POST["dob"];
$genderr=$_POST["gender"];
$subb=$_POST["subject"];





$servername="localhost";
$username="root";
$password="";
$databasename="bike_showroom";

$conn=new mysqli($servername,$username,$password,$databasename);
if($conn->connect_error){
    die("connection failed");
}
$sql="INSERT INTO registration_info (first_name,last_name,emmail,phone,birthday,gender,account)
VALUES('$firstname','$lastname','$email','$phnum','$datee','$genderr','$subb')";

if ($conn->query($sql)===TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error";
}

$conn->close();
?>