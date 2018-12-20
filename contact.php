<?php
   if(isset($_POST['send'])) {
   // Prepare the email
   $to = 'susiejojo1@gmail.com';
   $name=$POST['name'];
   $mail_from=$_POST['email'];
      $subject = 'Message sent from website';
      $message = $_POST['message'];
   // Send it
   $header="From: $name";
   $sent = mail($to, $subject, $message);
   if($sent) {
   echo 'Your message has been sent successfully!';
   } else {
   echo 'Sorry, your message could not send.';
   }
   }
?>