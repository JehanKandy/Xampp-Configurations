<?php 
    //who you need to send the email
    $receiver = "jehankandysl@gmail.com";

    //subject of the email
    $subject = "Localhost Email Sending";
    
    //body of the email
    $body = "Email Send by localhost.";
    
    //your email
    /*
        ---<<--- IMPORTANT --->>---

        $sender email must be same that you change in C:\xampp\sendmail configaration file

        otherwise email never send

    */
    $sender = "From:jehankandy@gmail.com";

    //check the email is sucessfully send using mail() function in php
    //in mail() you must assign 4 veriables like as following

    if(mail($receiver, $subject, $body, $sender)){
        echo "Email sent successfully to $receiver";
    }else{
        echo "Sorry, failed while sending mail!";
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
     ==========================================
     1. php.ini
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

            and save and close the php.ini file
    
        ====================================================

        2. sendmail.ini
        -> xampp/sendmail/sendmail.ini

            go to file location, 
                xampp/sendmail

                find php configaration file
                sendmail.ini

            --------**********----------

            *********************************
            ******** IMPORTANT **************
            *********************************

            step 1 -> open sendmail.ini file (configaration file)
            setp 2 -> find [sendmail] line 6 
            step 3 -> 
                edit like following
                    
                    *smtp_server=mail.mydomain.com -- to --> smtp_server=smtp.gmail.com
                    *smtp_port=25 -- to --> smtp_port=587
                    * ;debug_logfile=debug.log ** remove semicolen infrant of debug_logfile=debug.log

                        must be like this -- debug_logfile=debug.log

                    ---------------------------------------------
                    -- THIS EDIT IS DEPEND ON YOUR INFORMATION --
                    --------------- IMPORTANT--------------------
                    ---------------------------------------------

                    in line 46 and 47 
                        auth_username= enter your email address
                        auth_password= ************************

                        auth_password in not you email password

                        do following to get auth_password
                            -> Go to manage you Google Account 
                            -> then go to Security
                            -> Under Signing in to Google
                                - 2-Step Varification 
                                    - must be status is on 
                                - app password
                                    - in there, 
                                        - select app ---> Mail
                                        - select device ---> Windows Computer

                                        and then click GENERATE
                                        and the you can see a pop-ip screen with 
                                            code in yellow color background 

                                        copy the code and past it in 'auth_password'
                                    
                        * force_sender=  ----> force_senderyour email address (optional)

        // IMPORTANT**********
        restart your aparch and mysqli servers.
        



*/

?>
