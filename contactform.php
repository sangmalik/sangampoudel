<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $mailTo = "poudelsangam530@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You hava received an e-mail from ".$name.".\n\n".$message."\n\n".$phone;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.html?messagesent");
    
}
