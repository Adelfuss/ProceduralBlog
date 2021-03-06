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

    <title>Admin - Edit Post</title>
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
            <a href="create.php" class="btn btn-sm">Add Post</a>
            <a href="index.php" class="btn btn-sm">Manage Posts</a>
        </div>
        <div class="">
            <h2 style="text-align: center;">Edit Post</h2>

            <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="input-group">
                    <label>Title</label>
                    <input type="text" name="title" value="<?=$title?>" class="text-input">
                </div>
                <div class="input-group">
                    <label>Body</label>
                    <textarea class="text-input" name="body" id="body"><?=$body?></textarea>
                </div>
                <div class="input-group">
                    <label>Image</label>
                    <input type="file" class="text-input" name="image">
                </div>
                <div class="input-group">
                    <label>Topic</label>
                    <select class="text-input" name="topic_id">
                        <option value=""></option>
                        <?php foreach ($topics as $topic): ?>
                            <?php if (!empty($topic_id) && $topic_id == $topic['id'] ) : ?>
                                <option selected value="<?=$topic['id']?>"><?=$topic['name']?></option>
                            <?php else: ?>
                                <option  value="<?=$topic['id']?>"><?=$topic['name']?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php if (empty($published) && $published == 0) :?>
                    <div class="input-group">
                        <label>
                            <input  type="checkbox" name="published" /> Publish
                        </label>
                    </div>
                <?php else :?>
                    <div class="input-group">
                        <label>
                            <input checked type="checkbox" name="published" /> Publish
                        </label>
                    </div>
                <?php endif; ?>
                <div class="input-group">
                    <button type="submit" name="update-post" class="btn">Edit Post</button>
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

