<?php
$to = "info@premierwasterecycling.co.uk";
$subject = "Free Cardboard Collection";
$message = $_POST['msg'];
$msgFrom = $_POST['email'];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'. $msgFrom . "\r\n";


mail($to,$subject,$message,$headers);




?>
