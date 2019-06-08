<?php
    include '../util/dbconn.php'; include '../sql.php'; include '../util/fileupload.php';

    $title = $_POST['title'];
    $img_file = $_FILES['img_file'];
  //  $img_size = $_GET['$img_size'];
    $content = $_POST['content'];


//   $sql = insert_sql($title, $img_file, 1000, $content);
//   mysqli_query($conn, $sql);
echo "call method";
    img_upload($img_file);
echo "end method";
   //header("Location:../news.php");

?>