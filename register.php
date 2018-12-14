<?php



if (isset($_POST['done'])){
    
$email = $_POST["email"];
$name = $_POST["name"];
$website = $_POST["website"];
    
      
       /////
       ///sending mail to lupenyo
        $to = $email;
        $subject = "Tutor Registration";
        
        $message .= "
        <html>
        <head>
        <title>Tutor Registration</title>
        </head>
        <body>
        <h4>Congrats you have successfully register as $name </h4>
        <p>Please <a href=''>click here</a> to confirm registration</p>
       <br/>
       <br/>
       <p>Regards<br/>Company Assets</p>
        </div>
        </div>
        </body>
        </html>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <tysonmotlhabeng@rocketmail.com>' . "\r\n";
        $headers .= 'Cc: any' . "\r\n";
        
        mail($to,$subject,$message,$headers);

    
}

?>