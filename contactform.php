<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "mohamed.bensaleh@usask.ca";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from" .$name.'.\n\n'.$message;

    mail($mailTo, $subject, $message, $headers);

    header("Location: index.html?mailsend");


}

?>