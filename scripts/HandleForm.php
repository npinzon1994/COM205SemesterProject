<?php
$email = $_REQUEST['email'];
$select_option = $_POST['states'];
//if "email" variable is filled out, send email
if (filter_var($email, FILTER_VALIDATE_EMAIL))  {

    //Email information
    $name = $_REQUEST['name'];
    $admin_email = "nickpinzon@nickpinzonmusic.com";
    $subject = "You got fanmail! From:  " . $email;
    $comments = $_REQUEST['comments'];
    $final_message = "Name: " . $name . "\r\n\r\n" . "Message: " . "\r\n" . $comments;

    //send email
    mail($admin_email, "$subject", $final_message, "From:" . $email);

    //Email response
    $message_success = "Email sent. Thank you for your support!";
    echo "<script type='text/javascript'> alert('$message_success'); location='../contact.html'; </script>";
}

//if "email" variable is not filled out, display the form
else {
    $message_failed = "Email is invalid. Please use format (name@example.com)";
    echo "<script type='text/javascript'> alert('$message_failed'); location='../contact.html'; </script>";
}
?>