<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="CSS/login.css">
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>signUp</title>
</head>
<body>
    <form action="signUpbackend.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Confirm Password</label>
            <input type="password" name="cpassword" id="Cpassword"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
        <div class="col-md-12 text-center mb-3">
            <a href="/login.php"></a>
        </div>
        <div class="col-md-12 ">
            <div class="form-group">
            <p class="text-center"><a href="login.php" id="signin">Already have an account?</a></p>
            </div>
        </div>
        </div>
    </form>
<script src="JS/login.js"></script>
</body>
</html>