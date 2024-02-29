<?php
$serviceCode = $_POST["serviceCode"]
$sericeId = $_POST["serviceId"]
$userPhone = $_POST["userPhone"]
$text = $_POST["text"]

if ($text == ""){
    $response = "CON what would you like to check /n"
    . "1.  Check balance /n"
    . "2. Make a payment /n"
} else if ($text == "1"){
    $response = "CON choose account information u want to view /n"
    . "1. Account number /n"
    . "2. Account balance /n"
} else if ($text == "2"){
    $response = "1. Please enter recipients phone number /n"
}elseif ($text == 1*1){
    $response = " your accout number is: XXX-XXX"

}elseif ($text == 1*2){
    $response = "your current balance is: yyyy"
}
$header("content-type; text/plain")
echo $response
?>