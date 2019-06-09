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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cfc9510267b2e5785317dfd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->