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

/*
    and you can see this error
    Warning: mail(): "sendmail_from" not set in php.ini or custom "From:" header missing

    for the error you shoud do following configarations.

*/

/*
    -> check readme.md file for 
        -> how to configaration send_mail.ini and php.ini files
        
        ====== file loactions =====

        1. php.ini -> xampp/php/php.ini
        2. send_mail.ini -> xammp/sendmail/sendmail.ini
        
*/

//=====================================================================

/*
    file configarations
     
        -> xampp/php/php.ini

            go to file location, 
                xampp/php

                find php configaration file
                php.ini

                -----------------------
            and edit it like this

            --------**********----------
            
            step 1 -> in php.ini file find -> [mail function] -->(ctrl + f)
            step 2 -> change followings
                    - SMTP=localhost -- to --> SMTP=smtp.gmail.com
                    - smtp_port=25 -- to --> smtp_port=587
                    - sendmail_from = your_email_address_here <-- enter you email for send emails
                    - sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
                        //this path depend on where you installed xampp sever


                    ****************after you configarate it******************
                    [mail function]

                        ; For Win32 only.
                        ; https://php.net/smtp
                        SMTP=smtp.gmail.com
                        ; https://php.net/smtp-port
                        smtp_port=587

                        ; For Win32 only.
                        ; https://php.net/sendmail-from
                        sendmail_from = jehankandy@gmail.com

                        ; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
                        ; https://php.net/sendmail-path
                        sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

                    this deped on you information


*/
?>
