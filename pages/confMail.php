// include('includes/Settings.php');

<?php
$to = "swayamkharade4@gmail.com";
$subject = "Confirmation mail";
$message = "Hello! The changes you made are saved.";
$from = "swayamkharade4@gmail.com";
$headers = "From:" . $from;
mail($to, $subject, $message, $headers);
echo "Mail Sent.";
?>