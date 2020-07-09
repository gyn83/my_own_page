<?php
// variable settings
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

// check input field
if (empty($name) || empty($email) || empty($phone) || empty($message))
{
    echo "Please fill all the fields of form";
} 
else {
    mail("norbi.gyurkovits@gmail.com", "Message Digitalhardworker", $message, "From: $name < $email>");
    echo "<script type= 'text/javascript'>alert('Your message sent success')
    window.history.log(-1);
    </script>";
}
?>