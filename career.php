<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email  =$comment = $website = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = ($_POST["name"]);
    // check if name only contains letters and whitespace
    
    
  }
  
  if (empty($_POST["mail"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["mail"]);
    // check if e-mail address is well-formed
   
  }
    
  if (empty($_POST["ph-number"])) {
    $website = "";
  } else {
    $website = ($_POST["ph-number"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    
  }

  if (empty($_POST["address"])) {
    $comment = "";
  } else {
    $comment = ($_POST["address"]);
  }

  if (empty($_POST["resume"])) {
    $comment = "";
  } else {
    $resume = ($_POST["resume"]);
  }


$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['mail']));
$phone = strip_tags(htmlspecialchars($_POST['ph-number']));
$message = strip_tags(htmlspecialchars($_POST['address']));
$resume = strip_tags(htmlspecialchars($_POST['resume']));

echo "mail sent successful";
   
// Create the email and send the message
$to = 'hello@teamew.in'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form: $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName:$name\n\nEmail:$email_address\n\nPhone:$phone\n\nadress:$message\nResume:$resume";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";  
mail($to,$email_subject,$email_body,$headers);
  return true;

}

?>