<?php 
    if(isset($_POST['submit'])){
        $to = "niklasleukroth@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

        mail($to,$subject,$message);
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        }
?>