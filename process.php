<?php
// Get Data
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "luis.martinez.cobos@gmail.com", "Contact Form Submission",
"Name: $name\nEmail: $email\nMessage: $message\n",
"From: Forms <forms@example.net>" );
?>
