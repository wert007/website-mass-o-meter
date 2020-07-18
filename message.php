<?php 
    if(isset($_POST['submit'])){
        $to = "niklasleukroth@gmail.com"; // this is your Email address
        $from = "niklasleukroth@gmail.com"; // this is the sender's Email address
        $name = $_POST['last_name'];
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

        mail($to,$subject,$message,$headers);
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        }
?>