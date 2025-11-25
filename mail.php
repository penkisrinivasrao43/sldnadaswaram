<?php
date_default_timezone_set("Asia/Kolkata");
   include 'admin/config.php';
if (isset($_POST['submit'])) {
     $mailto = "sldnadaswaramplayers@gmail.com"; //My email address
   
   //getting customer data
   $name = $_POST['name'];//getting customer name
   $phone = $_POST['phone']; //getting customer Phome number
   $email = $_POST['email']; //getting customer email
   $event = $_POST['event'];
   $content = $_POST['content'];
   $date=date("Y-m-d");
   $time=date("h:i:sa");
   $subject= "Sld Nadaswaram";//getting subject line from client
   $subject2 = "Confirmation: Message was submitted successfully | Sld Nadaswaram"; // For customer confirmation

   //Email body I will receive
   $message = "Cleint Name: " . $name . "\n" . "Email: " . $email . "\n". "Event Name: " . $event . "\n" . "Phone Number: " . $phone . "\n". "Client Message: " . "\n" . $_POST['content'];

   //Message for client confirmation
   $message2 = "Dear". "\n" . $name . "\n" . "Thank you for contacting us. We will get back to you shortly!" . "\n\n" . "You submitted the following message: " . "\n" . $_POST['content'] . "\n\n" . "Regards," . "\n" . "- Sld Nadaswaram";

   //Email headers
   $headers = "From: " . $email; // Client email, I will receive
   $headers2 = "From: " . $mailto; // This will receive client

   //PHP mailer function

   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($email, $subject2, $message2, $headers2); //This confirmation email to client

   //Checking if Mails sent successfully

   if ($result1 && $result2) {
       echo '<script type="text/javascript">
            alert("Email sent successfully");
          window.location.href="index.php";
            </script>';
            
    //   $success = "Your Message was sent Successfully!";
      //header("Location: index.html");
   } else {
      $failed = "Sorry! Message was not sent, Try again Later.";
   }

   $sql = "INSERT INTO `clients`(name,phone,email,event,content,date,time) VALUES('$name','$phone','$email','$event','$content','$date','$time')";
   $result = mysqli_query($conn,$sql);
}

?>