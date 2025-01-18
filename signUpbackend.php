<?php
$first_name = ($_POST['firstname']);
$last_name = ($_POST['lastname']);
$email_address = ($_POST['email']);
$password = ($_POST['password']);

$conn = mysqli_connect('localhost', 'root', '', 'career_guidance_2.0');

?>