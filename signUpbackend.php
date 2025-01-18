<?php
$first_name = ($_POST['firstname']);
$last_name = ($_POST['lastname']);
$email_address = ($_POST['email']);
$password = ($_POST['password']);

$conn = mysqli_connect('localhost', 'root', '', 'career_guidance_2.0');

$query = "INSERT INTO `signup`(`first_name`, `last_name`, `email_address`, `password`) VALUES ('$first_name','$last_name','$email_address','$password')";

$result = mysqli_query($conn, $query);

if($result){
    echo '<script>alert("Registered Successfully");</script>';
    echo '<script>window.location.href="login.php"</script>';
}
?>