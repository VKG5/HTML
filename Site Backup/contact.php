<?php
    if(isset($_POST['submit'])) {
        // Data from the form
        $name = $_POST['name'];
        $email_from = $_POST['email'];
        $content= $_POST['message'];

        $email_to = "VarunGupta689@ymail.com";
        $subject = "Portfolio Query";
        $headers = "From: ".$email_from;
        $txt = "You have received an email from ".$name.".\n\n".$content;

        mail($email_to, $subject, $txt, $headers);
    }
    require_once "contact.php";
    header( 'Location: /contact.html' ) ;
?>