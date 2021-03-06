<?php include "../../path.php";
error_reporting(0);
?>
<?php include_once ROOT_PATH . "/app/controllers/users.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin - Add users</title>
</head>

<body>

<!-- header -->
<?php include "../../path.php"; ?>
<?php include_once ROOT_PATH . "/app/includes/adminHeader.php";?>
<!-- // header -->

<div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <?php include_once ROOT_PATH . "/app/includes/adminSidebar.php";?>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
        <div class="button-group">
            <a href="create.php" class="btn btn-sm">Add User</a>
            <a href="index.php" class="btn btn-sm">Manage Users</a>
        </div>
        <div class="">
            <h2 style="text-align: center;">Create User</h2>
            <?php include_once ROOT_PATH ."/app/helpers/FormErrors.php";?>
            <form action="create.php" method="post">
                <!-- <div class="msg error">
                  <li>Username required</li>
                </div> -->
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" class="text-input">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" class="text-input">
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" class="text-input">
                </div>
                <div class="input-group">
                    <label>Confirm Password</label>
                    <input type="password" name="passwordConf" class="text-input">
                </div>
                <div class="input-group">
                    <label>Admin</label>
                    <input type="checkbox" name="admin">
<!--                    <select class="text-input" name="role">-->
<!--                        <option value="user">User</option>-->
<!--                        <option value="admin">Admin</option>-->
<!--                    </select>-->
                </div>
                <div class="input-group">
                    <button type="submit" name="create-admin" class="btn">Save User</button>
                </div>
            </form>

        </div>
    </div>
    <!-- // Admin Content -->

</div>


<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<!-- Custome Scripts -->
<script src="../../assets/js/scripts.js"></script>
</body>

</html>
