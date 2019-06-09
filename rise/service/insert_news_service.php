<?php
    include '../util/dbconn.php'; include '../sql.php'; include '../util/fileupload.php';
    $title = $_POST['title'];
    $img_file = $_FILES['img_file'];
    $content = $_POST['content'];
    if(!isset($_POST['chk'][0])) {
        $performchk = "1";
    } else {
        $performchk = "0";
    }
    img_upload($title, $content, $img_file, $performchk);
    header("Location:../news.php");
?>