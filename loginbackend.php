<?php
$email_address = ($_POST['email']);
$password = ($_POST['password']);

$conn = mysqli_connect('localhost', 'root', '', 'career_guidance_2.0');

$query = "SELECT * FROM `signup` WHERE `email` = '$email_address' AND `password` = '$password'";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_row($result);

print_r($data);

if($data){
    echo '<script>alert("Login Successfully");</script>';
    echo '<script>window.location.href="interest.php"</script>';
}else{
    echo '<script>alert("Account does not exist");</script>';
    echo '<script>window.location.href="login.php"</script>';
}
?>