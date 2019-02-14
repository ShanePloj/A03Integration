<?php

$name;
$email;
$message;
$dietary;
if(isset($_POST['name'])){
    $name=$_POST['name'];
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
}
    if(isset($_POST['food'])){
    $food=$_POST['food'];
}
    if(isset($_POST['dietary'])){
    $dietary=$_POST['dietary'];
}

    $to = "stephaniejordan2019@gmail.com";
    $email_subject = "Wedding contact info";
    $email_body = "Person: $name.\n".
                  "Meal Choice: $food.\n".
                  "Message: $dietary";
    $header = "From: $email \r\n";
        
        if(mail($to,$email_subject,$email_body,$header)) {
         $feedback = 'Message sent! Thank you for your message!';
        } else {
             $feedback = 'Something went wrong!';
        }
echo $feedback;
?>