<?php
$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);

$name = $_GET['name'];
$phone = $_GET['phone'];

$headers = "From: משווקים יופי \r\n";
$message = "Name: ".$name.",\r\n";
$message .= "Phone: ".$phone."\r\n";


if (mail("alexnikol@e-mail.ua", "Заявка с сайта", $message, $headers)){
    header("Location:../thanks.php?send_email=true");
}
else{
    header("Location:../thanks.php?send_email=false");
}
exit;
?>