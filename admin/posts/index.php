<?php include "../../path.php";
error_reporting(0);
?>
<?php include_once ROOT_PATH . "/app/controllers/posts.php";?>
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

    <title>Admin - Manage Posts</title>
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
            <a href="create.php" class="btn btn-sm">Add Post</a>
            <a href="index.php" class="btn btn-sm">Manage Posts</a>
        </div>
        <div class="">
            <h2 style="text-align: center;">Manage Posts</h2>
            <?php include_once ROOT_PATH . "/app/includes/messages.php"?>
            <table>
                <thead>
                <th>N</th>
                <th>Title</th>
                <th>Author</th>
                <th colspan="3">Action</th>
                </thead>
                <tbody>
                <?php foreach ($posts as $key=> $post): ?>
                    <tr class="rec">
                        <td><?=$key +1?></td>
                        <td><a href="#"><?=$post['title']?></a></td>
                        <td>Awa</td>
                        <td><a href="edit.php?id=<?=$post['id']?>" class="edit">Edit</a></td>
                        <td><a href="edit.php?delete_id=<?=$post['id']?>" class="delete">Delete</a></td>
                        <?php if ($post['published']): ?>
                            <td><a href="edit.php?published=0&p_id=<?=$post['id']?>" class="publish">Unpublish</a></td>
                        <?php else : ?>
                            <td><a href="edit.php?published=1&p_id=<?=$post['id']?>" class="publish">Publish</a></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- // Admin Content -->

</div>


<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="../../assets/js/scripts.js"></script>

</body>

</html>

