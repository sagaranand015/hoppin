<?php
$conn =  mysqli_connect('mysql.hostinger.in','u883562062_x','u883562062_x','7696849107');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];


$query = "insert into skrillex (name,email,phone,age) values ('$name','$email','$phone','$age')";
mysqli_query($conn,$query);

/* $to = $email;
$subject = "ATMOS Registration";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@bits-atmos.com>' . "\r\n";
$message = "Thanks for registering. Your Atmos id is ".$id;
mail($to,$subject,$message,$headers);
*/
$p ="1";
echo $p;


?>
