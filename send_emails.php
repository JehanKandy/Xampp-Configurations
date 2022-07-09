<?php 
    $receiver = "jehankandysl.gmail.com";
    $subject = "Email Send Via XAMPP";
    $body = "JehanKandy email sending";
    $sender = "jehankandy@gmail.com";

    if(mail($receiver, $subject, $body, $sender)){
        echo "Email send to ".$receiver;
    }
    else{
        echo "Fail to send email";
    }
?>
