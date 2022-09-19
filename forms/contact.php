<?php
if(!isset($_POST['submit']))
{
  echo "Error! You need to submit the form.";
}
$name = $_POST['name'];
$email = $_POST['email'];
$subj = $_POST['subject'];
$message = $_POST['message'];

$email_from = "funbcwpv@prithvipunjabi.codes";
$email_subject = "New Form Submission";
$email_body = "You have received a new message from the user $name.\n".
"Email address: $email\n".
"Subject = $subj\n".
"Email Body = $message".

$to = "funbcwpv@prithvipunjabi.codes"
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
