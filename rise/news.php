<link rel="stylesheet" href="css/style.css">

<h1>RISE NEWS</h1>

<div class="news_container">

        <?php include 'util/dbconn.php'; include 'sql.php'; include 'service/news_service.php';
        showdata($conn, $s_news);
        ?>
    
</div>