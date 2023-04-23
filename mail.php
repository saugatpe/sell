<?php
$receiver = "saugatparajuli36@gmail.com";
$subject = "google verificstion";
$body = "	This is a copy of a secury is the recovery email for this account. If you don't recognise this account, remove it..";
$sender = "From:saugatpe9@gmail.com";

if(mail($receiver, $subject, $body, $sender)){
    echo "<script>alert('Email sent successfully to $receiver'); </script>";
}else{
    echo "Sorry, failed while sending mail!";
}
header('location: contact.php');
?>