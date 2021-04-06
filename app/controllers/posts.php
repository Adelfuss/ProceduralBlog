<?php
include_once ROOT_PATH . "/app/database/db.php";
include_once ROOT_PATH . "/app/helpers/validatePosts.php";

$table = "posts";
$posts = selectAll($table);
$topics = selectAll("topics");
$errors = array();
$id = "";
$title = "";
$body = "";
$topic_id = "";
$published = "";
if (isset($_GET['id'])){
    $post = selectOne($table,['id'=>$_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}
if (isset($_GET['delete_id'])){
    $count = delete($table,$_GET['delete_id']);
    $_SESSION['message'] = "POST Deleted successfully";
    $_SESSION['type'] = 'success';
    header("Location:". BASE_URL . "admin/posts/index.php");
    exit();
}
if (isset($_GET['published']) && isset($_GET['p_id'])){
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $post_id = update($table,$p_id,['published'=>$published]);
    $_SESSION['message'] = "POST Publish state changed successfully";
    $_SESSION['type'] = 'success';
    header("Location:". BASE_URL . "admin/posts/index.php");
    exit();
}
if (isset($_POST['add-post'])){
    $errors = validatePost($_POST);
    if (!empty($_FILES['image']['name'])){
        $imageName = time() . "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $imageName;
        $result = move_uploaded_file($_FILES['image']['tmp_name'],$destination);
        if ($result){
            $_POST['image'] = $imageName;
        }
        else {
            array_push($errors,"Failed to Upload File");
        }
    }
    else {
        array_push($errors,"POST IMAGE REQUIRED");
    }
    if (count($errors) ===0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $post_id = create($table,$_POST);
        $_SESSION['message'] = "POST CREATED successfully";
        $_SESSION['type'] = 'success';
        header("Location:". BASE_URL . "admin/posts/index.php");
        exit();
    }
    else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


if (isset($_POST['update-post'])) {
    $errors = validatePost($_POST);
    if (!empty($_FILES['image']['name'])){
        $imageName = time() . "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $imageName;
        $result = move_uploaded_file($_FILES['image']['tmp_name'],$destination);
        if ($result){
            $_POST['image'] = $imageName;
        }
        else {
            array_push($errors,"Failed to Upload File");
        }
    }
    else {
        array_push($errors,"POST IMAGE REQUIRED");
    }
    if (count($errors) ===0) {
        $id = $_POST['id'];
        unset($_POST['update-post'],$_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $post_id = update($table,$id,$_POST);
        $_SESSION['message'] = "POST updated successfully";
        $_SESSION['type'] = 'success';
        header("Location:". BASE_URL . "admin/posts/index.php");
        exit();
    }
    else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}