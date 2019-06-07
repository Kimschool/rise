<?php
    include '../util/dbconn.php'; include '../sql.php';

    $title = $_GET['title'];
    $img_file = $_GET['img_file'];
  //  $img_size = $_GET['$img_size'];
    $content = $_GET['content'];


   $sql = insert_sql($title, $img_file, 1000, $content);
   mysqli_query($conn, $sql);
   
   img_upload($param);

   header("Location:../news.php");

?>