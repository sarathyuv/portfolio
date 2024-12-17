
<?php
     if (isset($_POST['submit'])) {
        $name = $_REQUEST['name'];
        $mail = $_REQUEST['mail'];
        $comment = $_REQUEST['comment'];

      // Set your email address where you want to receive emails. 
       $to = 'uvsarathy@gmail.com';
       $subject = 'Contact Request From sarathy porfolio';
       $headers = "From: ".$name." <".$email."> \r\n";
       $send_email = mail($to,$subject,$message,$headers);

       echo ($send_email) ? 'success' : 'error';

  }?>