<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
// $phone = $_POST['phone'];
// $call = $_POST['call'];
// $website = $_POST['website'];
// $priority = $_POST['priority'];
// $type = $_POST['type'];
$message = $_POST['message'];
$formcontent="$message";
$recipient = "rupak.mopharma@gmail.com";
$mailheader = "From: $name \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>