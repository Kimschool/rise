<link rel="stylesheet" href="css/style.css">
<link href="css/lightbox.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

<h1>RISE NEWS</h1>

<div class="news_container">
	<button onclick="location.href='html/insert_news.html'">登録</button>
	<button onclick="location.href='html/insert_news.html'">実績画面へ</button>
        <?php include 'util/dbconn.php'; include 'sql.php'; include 'service/news_service.php';
            showdata($conn, $s_news);
        ?>
</div>
<script src="js/lightbox.js"></script>