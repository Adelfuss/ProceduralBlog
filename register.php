<?php include_once "path.php";?>
<?php include_once ROOT_PATH . "/app/controllers/users.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Register</title>
</head>

<body>

<!-- header -->
<?php include_once ROOT_PATH ."/app/includes/header.php";?>
<!-- // header -->

<div class="auth-content">
    <form action="register.php" method="post">
        <h3 class="form-title">Register</h3>
        <?php include_once ROOT_PATH ."/app/helpers/FormErrors.php";?>
        <div>
            <label>Username</label>
            <input type="text" name="username" class="text-input" value="<?=$username?>">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?=$email?>"class="text-input">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" value="<?=$password?>" class="text-input">
        </div>
        <div>
            <label>Confirm Password</label>
            <input type="password" name="passwordConf" value="<?=$passwordConf?>" class="text-input">
        </div>
        <div>
            <button type="submit" name="register-btn" class="btn">Register</button>
        </div>
        <p class="auth-nav">Or <a href="<?=BATH_URL?>login.php">Sign In</a></p>
    </form>
</div>

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="assets/js/scripts.js"></script>

</body>

</html>
