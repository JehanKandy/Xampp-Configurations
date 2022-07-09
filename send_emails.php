<?php 
    //who you need to send the email
    $receiver = "jehankandysl.gmail.com";

    //subject of the email
    $subject = "Email Send Via XAMPP";
    
    //body of the email
    $body = "JehanKandy email sending";
    
    //your email
    /*
        ---<<--- IMPORTANT --->>---

        $sender email must be same that you change in C:\xampp\sendmail configaration file

        otherwise email never send

    */
    $sender = "jehankandy@gmail.com";

    //check the email is sucessfully send using mail() function in php
    //in mail() you must assign 4 veriables like as following
    
    if(mail($receiver, $subject, $body, $sender)){
        echo "Email send to ".$receiver;
    }
    else{
        echo "Fail to send email";
    }
?>
