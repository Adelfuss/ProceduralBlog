<?php include "../../path.php";
error_reporting(0);
?>
<?php include_once ROOT_PATH ."/app/controllers/topics.php";?>
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

    <title>Admin - Edit Topic</title>
</head>

<body>

<!-- header -->
<?php include_once ROOT_PATH . "/app/includes/adminHeader.php";?>
<!-- // header -->

<div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <?php include_once ROOT_PATH . "/app/includes/adminSidebar.php";?>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
        <div class="button-group">
            <a href="create.php" class="btn btn-sm">Add Topic</a>
            <a href="index.php" class="btn btn-sm">Manage Topics</a>
        </div>
        <div class="">
            <h2 style="text-align: center;">Edit Topic</h2>
            <?php include_once ROOT_PATH ."/app/helpers/FormErrors.php";?>
            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?=$name?>" class="text-input">
                </div>
                <div class="input-group">
                    <label>Description</label>
                    <textarea class="text-input" id = "body" name="description" id="description"><?=$description?></textarea>
                </div>
                <div class="input-group">
                    <button type="submit" name="update-topic" class="btn" >Edit Topic</button>
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
